#coding: utf-8
from config import *
import HTMLParser  ##for linux
#import html.parser ##for windows
import requests
import ast
import re


TAG_RE = re.compile(r'<[^>]+>')

## Atualiza o sistema de cotacao de dolar para real ##

def update_cot():
	s = requests.Session()
	#SERVER1 = "http://rate-exchange.appspot.com/currency?from=USD&to=BRL" deprecate
        SERVER2 = "http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s=USDBRL=X"

	try:
		str_dic = s.get(SERVER2).text
		#dic= ast.literal_eval(str_dic)
		#return dic['rate']
		return str_dic.split(",")[1]
	except:
                str_dic = s.get(SERVER2).text
		return str_dic.split(",")[1]

def get_cot():
	log = open("data/log.data", "r")
	cot = log.read().split('|||')[-1]
	return float(cot)
	


## HTML Parse ##
class LinksParser(HTMLParser.HTMLParser):
  def __init__(self):
    HTMLParser.HTMLParser.__init__(self)
    self.recording = 0
    self.data = []

  def handle_starttag(self, tag, attributes):
    if tag != 'div':
      return
    if self.recording:
      self.recording += 1
      return
    for name, value in attributes:
      if name == 'class' and value == 'wa-content wa-tabs-container wa-conditionalDisplay':
        break
    else:
      return
    self.recording = 1

  def handle_endtag(self, tag):
    if tag == 'div' and self.recording:
      self.recording -= 1

  def handle_data(self, data):
    if self.recording and data != " " and "(~" not in data:
      self.data.append(data)
      

def contains_digits(s):
    return any(char.isdigit() for char in s)

def clean(s):
    return TAG_RE.sub('', s).replace("\t", "").replace("\r", "").replace("\n", "").replace('  ', '')

def clean_price(price):
	return price.replace(' ', '').replace('$', '').replace('GB', '')

def get_memory_default(mem):
	if 'MB' in mem or float(mem) > 32:
		return 1
	diff= 1000
	m = 0
	for i in MEM_DEF:
		aux = abs(i-float(mem))
		if aux < diff:
			diff = aux
			m = i
	return m


	

