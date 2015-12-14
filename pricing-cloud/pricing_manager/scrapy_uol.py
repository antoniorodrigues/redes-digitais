from scrapy import Spider, Item, Field
from scrapy.selector import HtmlXPathSelector
from config import *
import re

instances = []

class Post(Item):
    title = Field()

class BlogSpider(Spider):
    name, start_urls = 'blogspider', ['http://www.uolhost.com.br/uol-cloud-computing.html']

    def parse(self, response):
       print response
       hxs = HtmlXPathSelector(response)
       items = hxs.select('//table//td//text()').extract()
       rows = hxs.select('//tr')
       list_instances = []
       types_list = []

       for row in rows:
           l= [i for i in row.select('td/text()').extract() if len(i.replace(' ', '')) > 1 or re.match("^[A-Za-z0-9_-]*$", i)]
	   if len(l) == 8:
	        if l[0] in types_list:
                   return

		types_list.append(l[0])
		dic = {"type": l[0], "vCPU": l[1], "memoryGiB": l[2], "so": 'linux',
                       "GCEU":l[3], "Lowest price":l[4], "Typical price":l[5], "Full price":l[6], "region":GOOGLE_REGIONS[0]}
		print dic
		instances.append(dic)
       print "test scrapy" 
       print "-----"+instances


#spi = BlogSpider()
#print instances
#print instances

