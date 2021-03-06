#coding: utf-8
from config import *
import ast
from util import *
import requests
import re


### Uol / Locaweb pricing search ###

s = requests.Session()

LOCAWEB_SERVER = "http://www.locaweb.com.br/produtos/cloud-server/planos-pro.html"
separator_locaweb = "comparative-resouces-body" 

def get_storage_price(request):
	result =  request.split('<strong class="blue">Disco')[1]
	result = result[result.find('<strong'):result.find('</li>')].split('</strong>')
	return float(re.sub("[^0123456789\.]", "", result[1].replace(',','.'))) / float(re.sub("[^0123456789\.]", "", result[0]))


def format_dict(str_):
	return str_.replace(':', '":').replace(',', ',"').replace('{', '{"').replace(',"{', ',{').replace('null', '"null"').replace(' ', '').replace("\n", "").replace('""', '"')


def get_instances_locaweb():
	request_storaged = s.get(LOCAWEB_SERVER).text
	try:
		price_storage = get_storage_price(request_storaged)
	except:
		price_storage = 0.0
	SERVER = "http://www.locaweb.com.br/templates/lw2013/javascript/cloud/ficha-cloud-pro-b-min.20141202115931.js"
	html_request = s.get(SERVER).text.split('Memory(index)')[1]
	html_request = html_request[html_request.find('['):html_request.find(']')+1]

	dics= ast.literal_eval(format_dict(html_request))
	list_inst = []
	
	for dic in dics:
		inst_current = {}
		inst_current['plano'] = 'Cloud Server %s GB' %dic['qnt']
		inst_current['so'] = 'Linux'
		inst_current['price_storage'] = price_storage
		inst_current['price'] = dic['price']
		inst_current['memoryGiB'] = dic['qnt']
		inst_current['vCPU']  = dic['vCPU']
		inst_win = inst_current.copy()
		inst_win['so'] = 'Windows'
		list_inst.append(inst_current)
		list_inst.append(inst_win)

	return list_inst


def get_tab_locaweb(days=30):
        ss = []
        for i in get_instances_locaweb():
                mem = i['memoryGiB'].replace(' GB', '')
                vcpu = str(i['vCPU'])
                #price1 = float(i['price_per_hour'].replace('R$','').replace(',','.').replace(' ', '').replace('por', ''))
                #price2 = float(i['price_per_month'].replace('R$','').replace(',','.').replace(' ', '').replace('por', ''))
                
                #print "%.2f/h ou %.2f para o plano mensal" %(days*12*price1, price2)
        
                w = """         <tr class=alternate2>
                                        <td talk-marker="91"  class="confluenceTd"><p talk-marker="92"><a href="http://www.locaweb.com.br/produtos/cloud-server/planos-pro.html" >
                                        <img src="./static/locaweb.jpg" />Locaweb</a></p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s (Disponivel somente para plano mensal)</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td style="display:none;">%s</td>
                                        <td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> %s </p></td>
					<td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92"> %s </p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> 0.0 </p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> %s </p></td>
                                </tr><tr>\n
                """%(i['plano'], i['so'].capitalize(), i['memoryGiB'], vcpu, 'Variavel',
                "%.2f" %(i['price']), get_memory_default(mem),   #"%.2f" %(days*6*price1), mem,
                "%.2f" %(i['price']),        #"%.2f/h ou %.2f para o plano mensal" %(days*12*price1, price2),
                "%.2f" %(i['price']),        #"%.2f/h ou %.2f para o plano mensal"%(days*24*price1, price2),
                "%.2f" %i['price_storage'], "%.2f" %i['price_storage'], REG_BR2)
                ss.append(w)
                        
        file_ = open('data/locaweb.data', 'w')
        file_.writelines(ss)
        file_.close()




UOL_SERVER = "http://www.uolhost.com.br/uol-cloud-computing.html"
separators_uol =  ('Tabela comparativa de planos mensais', '<tfoot>')


def getuol():
	SERVER = "http://jsuol.com/p/uolhost/2012/cloud-reservada_abc.js?v=19"
	html_request = s.get(SERVER).text.split('infoCloudPlainFractionated=')[1]
	html_request = html_request[html_request.find('['):html_request.find(']')+1]

	dics= ast.literal_eval(html_request)
	return dics #dics

#for i in getuol():
#	print i


def get_instances_uol():
        list_instances = []
        html_request = s.get(UOL_SERVER).text.encode('cp1252').replace('\r', '\n')
        table = html_request[html_request.find(separators_uol[0]) : html_request.find(separators_uol[1])].split('\n')
        #html_request = s.get(UOL_SERVER).text
        #table = html_request[html_request.find(separators_uol[0]) : html_request.find(separators_uol[1])].split('\n')
	
    
        list_lin = [{} for i in range(15)]
        id_ = 0
        key = -1
        keys = ['memoryGiB', 'vCPU', 'banda', 'price_per_hour', 'price_per_months']
        for line in table:
                line = line.replace('\n', '').replace('\r', '')
                attribute = re.sub('<[^>]*>', '', line.replace('  ', ''))
                if ('<td' in line or '<span' in line) and 'de:' not in line and attribute != '':
                        id_+=1                  
                        if id_ > 1:
                                list_lin[id_][keys[key]]= attribute
                                list_lin[id_]['so']= 'Linux'
                elif '</tr>' in line:
                        
                        id_ = 0
                        key+= 1
        list_lin = [i for i in list_lin if 'vCPU' in i.keys()]
        list_win = []
        for i in list_lin:
                dic = i.copy()
                dic['so'] = 'Windows'
                list_win.append(dic)
                
        return list_lin + list_win


        
def get_tab(days=30):
        ss = []
        list_inst = get_instances_uol();
        if len(list_inst) == 0:
			return
        for i in list_inst:
                mem = i['memoryGiB'].replace(' GB', '')
                vcpu = i['vCPU'].replace(' vCPUs', '').replace(' vCPU', '')
                price1 = float(i['price_per_hour'].replace('R$','').replace(',','.').replace(' ', '').replace('por', ''))
                price2 = float(i['price_per_months'].replace('R$','').replace(',','.').replace(' ', '').replace('por', ''))
                
                typ = 'Light'
                if 2 < int(vcpu) < 8:
                        typ = 'Essencial'
                elif int(vcpu) >=8:
                        typ = 'Maxi'
                        
                w = """         <tr class=alternate2>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="https://www.uolhost.com.br/uol-cloud-computing.html" >
                                        <img src="./static/uol.jpg" />Uol</a></p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td style="display:none;">%s</td>
                                        <td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        <td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92">%s</p></td>
                                        
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> -- </p></td>
					<td style="display:none;" talk-marker="91" class="confluenceTd"><p talk-marker="92"> -- </p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> 0.0 </p></td>
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"> %s </p></td>
                                </tr><tr>\n
                """%(typ, i['so'].capitalize(), mem, vcpu, 'Variavel',
                "%.2f" %(days*6*price1), get_memory_default(mem),
                "%.2f/h ou %.2f para o plano mensal" %(days*12*price1, price2),
                "%.2f/h ou %.2f para o plano mensal"%(days*24*price1, price2), REG_BR2)
                ss.append(w)
                        
        file_ = open('data/uol.data', 'w')
        file_.writelines(ss)
        file_.close()

def main():
	get_tab_locaweb()
	get_tab()	
	print 'ok nationals'

