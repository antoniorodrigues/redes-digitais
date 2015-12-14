#coding: utf-8
from config import *
from util import *
import requests
import re


### Rackspace pricing search ###
s = requests.Session()

separator_rackspace = 'class="pricing-row' 
separator_storaged = 'class="pricing-col pricing-col-raw pricing-col-monthly'

TAG_RE = re.compile(r'<[^>]+>')


def get_storaged_price():	
	html_request = s.get(STORAGED_SERVER_RACKSPACE).text	
	aux = html_request.split(separator_storaged)

	return clean_price( aux[1][2:aux[1].find('</td>')]), clean_price(aux[2][2:aux[2].find('</td>')])


def get_instances_rackspace():
	list_instances = []
	html_request = s.get(RACKSPACE_SERVER).text
	tables = html_request.split(separator_rackspace)
	for i in range(0, len(tables)-20):
		if 'pricing-row-linux' in tables[i]:
			inst = TAG_RE.sub('', "<"+tables[i]).replace("\t", "").split("\n")[1:-1]
			inst = [zx.replace(" ", "") for zx in inst if zx.replace(" ", "") != ""]
			#print inst[3], inst[4]

			dic = {"type": inst[0], "so": "linux", "memoryGiB": inst[1].replace('GB', ''), "vCPU": inst[2],
					"storageGB":inst[3], "Data Disk": inst[4], "Bandwidth":inst[5],
					"price_per_hour": inst[6], "price_per_month": inst[7], "Service Level : Managed Infrastructure (per hour)":inst[9], 
					"Service Level : Managed Infrastructure (per month)":inst[10]}
					
			list_instances.append(dic)
		
		
		
		if 'pricing-row-windows' in tables[i]:
			inst = TAG_RE.sub('', "<"+tables[i]).replace("\t", "").split("\n")[1:-1]
			inst = [zx.replace(" ", "") for zx in inst if zx.replace(" ", "") != ""]

			dic = {"type": inst[0], "so": "windows", "memoryGiB": inst[1].replace('GB', ''), "vCPU": inst[2],
					"storageGB":inst[3], "Data Disk": inst[4], "Bandwidth":inst[5],
					"price_per_hour": inst[6], "price_per_month": inst[7], "Service Level : Managed Infrastructure (per hour)":inst[9], 
					"Service Level : Managed Infrastructure (per month)":inst[10]}
			
		
			list_instances.append(dic)
		
	return list_instances



def get_tab(days=30):
	ss = []
	cot = get_cot()
	for i in get_instances_rackspace():
		#for j in [6, 12, 24]:
		price = i['price_per_hour'].replace('$','').replace('/hr','')
		st_price = get_storaged_price()
		w = """			<tr class=alternate2>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="https://www.rackspace.com/" >
					<img src="./static/rackspace.jpg" />Rackspace</a></p></td>
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
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> %s </p></td>
				</tr><tr>\n
		"""%(i['type'], i['so'].capitalize(), i['memoryGiB'].replace('$','').replace('/hr','').replace('GB', ''), i['vCPU'], i['storageGB'], 
		"%.2f" %(cot*days*6*float(price)), get_memory_default(i['memoryGiB']), 
		"%.2f" %(cot*days*12*float(price)),
		"%.2f" %(cot*days*24*float(price)),
		"%.2f" %(cot*float(st_price[0])),
		"%.2f" %(cot*float(st_price[1])), REG_US)
		ss.append(w)
	
	file_ = open('data/rackspace.data', 'w')
	file_.writelines(ss)
	file_.close()

def main():
	get_tab()	
	print 'ok rackspace'

#print get_instances_rackspace()
#main()
