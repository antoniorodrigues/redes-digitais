from scrapy import Spider, Item, Field
from scrapy.selector import HtmlXPathSelector
from config import *
import re

instances = []

class Post(Item):
    title = Field()

class BlogSpider(Spider):
    name, start_urls = 'blogspider', ['http://azure.microsoft.com/pt-br/pricing/details/virtual-machines/']

    def parse(self, response):
       hxs = HtmlXPathSelector(response)
       items = hxs.select('//table//tbody//tr//td//text()').extract()
       rows = hxs.select('//tbody//tr')
       list_instances = []
       types_list = []

       for row in rows:
	   dic = {}
           if True: #try:
	        inst_type = row.select('td/span/text()').extract() [0]
		inst_config =  row.select('td/strong/text()').extract()
	        prices = row.select('td/span/span/text()').extract()
	        dic["type"] = inst_type
		dic["vCPU"] = inst_config[0]
		dic["memoryGiB"] = inst_config[1]
		dic["Disk"] = inst_config[2]
		dic["prices"] = [prices[0], prices[17]]
		count_ins = types_list.count( (dic["type"], dic["memoryGiB"], dic["vCPU"]) )
		print count_ins
		if count_ins == 0:
		    dic["so"] = 'windows'
		elif count_ins == 1:
		    dic["so"] = 'windows'
		    dic["type"] = inst_type+ " Standard"
		elif count_ins == 2:
                    dic["so"] = 'linux'
		else:
                    dic["so"] = 'linux'
                    dic["type"] = inst_type+ " Standard"

		#   id_so+= 1
		types_list.append((inst_type, dic["memoryGiB"], dic["vCPU"]))
		print dic 
		#print (types_list) 
           else: #except:	
           	print 'None' #print row.select('td/text()').extract()


#spi = BlogSpider()
#print instances

