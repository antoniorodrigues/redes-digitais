from scrapy import Spider, Item, Field
from scrapy.selector import HtmlXPathSelector
from config import *
import re

instances = []

class Post(Item):
    title = Field()

class BlogSpider(Spider):
    name, start_urls = 'blogspider', ['https://www.rackspace.com/cloud/public-pricing']

    def parse(self, response):
       hxs = HtmlXPathSelector(response)
       rows = hxs.select('//tr')
       list_instances = []
       types_list = []

       for row in rows:
           l= [i.replace('  ', '').replace('\n', '') for i in row.select('td/text()').extract() if len(i.replace(' ', '')) > 1 or re.match("^[A-Za-z0-9_-]*$", i)]
	   if len(l) >= 8:
	        try:
	            count_inst = types_list.count(l[0]) #if l[0] in types_list:
                    dic = {"type": l[0], "vCPU": [2], "memoryGiB": l[1], "so": 'linux', "Disk":l[3], "price_h": l[5]+l[7], "price_m":l[6]+l[8]}
		    if count_inst == 0:
			dic["so"]= 'linux'
			types_list.append(l[0])
		    elif count_inst == 1:
			dic["so"]= 'windows'
			types_list.append(l[0])
		    else:
			dic = ""
		    if dic!= '':
			list_instances.append(dic)
		except:
		    None
       print "test scrapy" 
       print "-----", list_instances



#spi = BlogSpider()
#print instances

