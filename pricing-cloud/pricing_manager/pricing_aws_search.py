#coding: utf-8
import requests
import ast
from config import *
from util import *


### AWS pricing search ###

s = requests.Session()

def format_dict(str_):
	return str_.replace(':', '":').replace(',', ',"').replace('{', '{"').replace(',"{', ',{').replace('null', '"null"').replace(' ', '').replace("\n", "").replace('""', '"')



def get_storaged_price(region='us-east'):
	r = s.get(STORAGED_SERVER_AWS)
	str_dic = (r.text[0:-2]).split('callback(')[1]
	dics= ast.literal_eval(format_dict(str_dic))['config']['regions']
	selected = dics[0]
	for item in dics:
		if item['region'] == region:
			selected = item
			break
			
	price_ssd= 0.0
	price_mag= 0.0

	list_prices = selected['types']
	for price in list_prices:
		if price['name'] == 'AmazonEBSGeneralPurpose(SSD)volumes':
			price_ssd = price['values'][0]['prices']['USD']
		elif price['name'] == 'AmazonEBSMagneticvolumes':
			price_mag = price['values'][0]['prices']['USD']
		
	return price_ssd, price_mag



def get_group_by_region(region, generation, so):
	r = s.get(ON_DEMAND[so][generation])
	str_dic = (r.text[0:-2]).split('callback(')[1]
	str_dic = format_dict(str_dic)
	dic= ast.literal_eval(str_dic)
	
	regions = dic['config']['regions']
	for reg in regions:
		if reg['region'] == region:
			return reg
	return regions[0]

def get_instances(region=REGION, generation=NEW, so=LINUX):
	list_inst = []
	for group in  get_group_by_region(region, generation, so)['instanceTypes']:
		for inst in group['sizes']:
			list_inst.append(inst)
	return list_inst 


def get_avaliable_instances(region=REGION, generation=NEW, so=LINUX):
	l = []
	for i in get_instances(region, generation, so):
		i['region'] = region
		i['so']=so
		i['type'] = i['size']
		i['price_per_hour'] = i['valueColumns'][0]['prices']['USD']
		l.append(i)
	return l
	
def show_avaliable_instances(region=REGION, generation=NEW, so=LINUX):
	for i in get_instances(region, generation, so):
		keys = i.keys()
		for k in keys:
			print "%s= %s" %(k, i[k])
		print "-----------------"
	
def get_all_avaliable_instances():
	GROUPS = [(LINUX, NEW), (LINUX, OLD), (WINDOWS, NEW), (WINDOWS, OLD)]
	#r1 = s.get(ON_DEMAND[LINUX][NEW])
	#r2 = s.get(ON_DEMAND[LINUX][OLD])
	#r3 = s.get(ON_DEMAND[WINDOWS][NEW])
	#r4 = s.get(ON_DEMAND[WINDOWS][oldgeneration])
	list_inst=[]
	for item in GROUPS:
		r1 = s.get(ON_DEMAND[item[0]][item[1]])
		str_dic = (r1.text[0:-2]).split('callback(')[1]
		str_dic = format_dict(str_dic)
		dic= ast.literal_eval(str_dic)
		
		regions = dic['config']['regions']
		for reg in regions:
			for group in reg['instanceTypes']:
				for inst in group['sizes']:
					inst['region'] = reg['region']
					inst['so'] = item[0]
					inst['generation'] = item[1]
					inst['type'] = inst['size']
					inst['price_per_hour'] = inst['valueColumns'][0]['prices']['USD']
					list_inst.append(inst)
					#if inst['valueColumns'][0]['name'] != 'linux':
					#	print inst['valueColumns'][0]['name']
			
	return list_inst
	
def filter_list(list_, attributes):
	filt_list = []
	for item in list_:
		have_att = True
		for key in attributes.keys():
			if attributes[key] != "":
				if item[key] != attributes[key]:
					have_att = False
		if have_att:
			filt_list.append(item)
	
def main():
	print " --- Avaliable Instances - Region: %s---\n"%REGION
	#print " ----------------- LINUX: New Generation -----------------"
	#show_avaliable_instances(REGION, NEW, LINUX);
	#print " ----------------- LINUX: Old Generation -----------------"
	#show_avaliable_instances(REGION, OLD, LINUX);
	print " ----------------- WINDOWS: New Generation -----------------"
	show_avaliable_instances(REGION, NEW, WINDOWS);
	#print " ----------------- WINDOWS: Old Generation -----------------"
	#show_avaliable_instances(REGION, OLD, WINDOWS);
	
def get_tab(hours=1, days=30):
	ss = []
	cot= get_cot()
	list_inst = get_avaliable_instances(REGION, NEW, LINUX)+get_avaliable_instances(REGION, NEW, WINDOWS)
	list_inst+= get_avaliable_instances(REGION2, NEW, LINUX)+get_avaliable_instances(REGION2, NEW, WINDOWS)
	if len(list_inst) == 0:
		return
		
	storaged_price_us =  get_storaged_price()
	storaged_price_br =  get_storaged_price(REGION2)
	
	for i in list_inst:	
		region = REG_US
		st_ssd, st_stand = storaged_price_us
		if i['region'] == REGION2:
			region = REG_BR1
			st_ssd, st_stand = storaged_price_br			
		
		w = """			<tr class=alternate2>
						<td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="https://aws.amazon.com/" >
					<img src="./static/aws.jpg" />Amazon WS</a></p></td>
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
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="./awscloud" >
					<img src="./static/cloud-icon.png" />Implantar</a></p></td>
				</tr><tr>\n
		"""%(i['type'], i['so'], i['memoryGiB'], i['vCPU'], i['storageGB'], "%.2f" %(cot*days*6*float(i['price_per_hour'])),
			 get_memory_default(i['memoryGiB']), "%.2f" %(cot*days*12*float(i['price_per_hour'])), "%.2f" %(cot*days*24*float(i['price_per_hour'])),
			 "%.2f" %(cot*float(st_stand)), 
			 "%.2f" %(cot*float(st_ssd)), region)
		ss.append(w)
		
	file_ = open('data/aws.data', 'w')
	file_.writelines(ss)
	file_.close()

def get_menu_mem():
	for i in (get_avaliable_instances(REGION, NEW, LINUX)+
	get_avaliable_instances(REGION, NEW, WINDOWS)):
		print """ <option value="3">%s</option>"""%i['memoryGiB']
		

def main():
	get_tab()	
	print 'ok aws'

#main()
