#coding: utf-8
from config import *
from util import *
import requests
import lxml.html
import re

### Google pricing search ###

s = requests.Session()

separators = ('id="us">US hosted', 'id="eu">Europe')
storaged_separator = ('<td>Standard Persistent Disk Provisioned Space</td>', '<td>SSD Persistent Disk Provisioned Space</td>')

def get_instances_():
	html_request = s.get(GOOGLE_SERVER).text
	list_instances = []
	
	standard = clean_price(html_request.split(storaged_separator[0])[1].replace('$', ''))
	ssd = clean_price(html_request.split(storaged_separator[1])[1])
	standard = clean(standard[standard.find('<td>'):standard.find('</td>')]).replace(' ', '').replace('/month', '')
	ssd = clean(ssd[ssd.find('<td>'):ssd.find('</td>')]).replace(' ', '').replace('/month', '')
	
	for str_ in range(len(separators)):
		tables = html_request.split(separators[str_])[1].split('pricing-table-head')

		for ind in range(1, 5):
			
			tab = "".join([line.replace(" ", "").replace("<br>", "") for line in tables[ind].split('\n') if "<td>" in line or "tr>" in line])
			print '----------------------'
			print tab
			root = lxml.html.fromstring(tab)
			l= root.xpath('//tr/td//text()')
			print l
			print l[0], l[2], l[6]
			print l[7]
			for i in range(0, len(l), 7):
				try:
					dic = {"type": l[i], "vCPU": l[i+1], "memoryGiB": l[i+2], "so": 'linux',
					"GCEU":l[i+3], "Lowest price":l[i+4], "Typical price":l[i+5], "Full price":l[i+6], "region":GOOGLE_REGIONS[str_],
					'price_ssd':ssd, 'price_stand':standard}
					list_instances.append(dic)
				except:
					print 'err'
				
	return list_instances
	
def get_tab(days=30):
	ss = []
	for i in [i for i in get_instances_() if i['region'][0:2] == 'US']:
		price1 = i["Full price"]
		price2 = i["Typical price"]
		price3 = i["Lowest price"]
		cot = get_cot()
		
		w = """			<tr class=alternate2>
			<td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="https://cloud.google.com/compute/" >
					<img src="./static/google.jpg" />Google</a></p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td style="display:none;">%s</td>
					<td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> 0.0 </p></td>
					 <td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92"> %s </p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="./googlecloud" >
                                        <img src="./static/cloud-icon.png" />Implantar</a></p></td>

				</tr><tr>\n
		"""%(i['type'], i['so'].capitalize(), i['memoryGiB'].replace('GB', ''), i['vCPU'], 'Variavel',
		 "%.2f" %(cot*days*6*float(price1.replace('$','').replace(',','.'))), get_memory_default(i['memoryGiB'].replace('GB', '')), 
		 "%.2f" %(cot*days*12*float(price2.replace('$','').replace(',','.'))),
		 "%.2f" %(cot*days*24*float(price3.replace('$','').replace(',','.'))),
		 "%.2f" %(cot*float(i['price_stand'])), 
		 "%.2f" %(cot*float(i['price_ssd'])), REG_US)
		ss.append(w)
			
	file_ = open('data/google.data', 'w')
	file_.writelines(ss)
	file_.close()

def main():
	get_tab()	
	print 'ok google'

#print get_instances_()
