#!/usr/bin/env python
# -*- coding: UTF-8
 
from threading import Thread
from time import sleep
import aws_ec2
from resource_conf import *
import load_balance_manager

PERIOD_CHECKER = 2 #periods of 30 secs to checker arlams (default 2 = 60 secs)
TIME_RUNNING = 4 #1200 periods of 30 sec = 36000 secs

class Resource_Monitor(Thread):
	def __init__(self, time):
		Thread.__init__(self)
		self.init()
		self.time = time
		self.PERIOD = 1

	def run(self):
		 """Run the thread at intervals of 30 secs
		"""
		for i in range(1,self.time):
			self.update()
			if self.PERIOD == PERIOD_CHECKER:
				self.checker()
				self.PERIOD = 1
			else:
				self.PERIOD+= 1
			sleep(30)

	def init(self):
		 """Init the system creatin a instance if necessary
		"""
		self.update()
		file_inst = open("instances.data", 'r')
		instances = [i for i in file_inst.read().split("||") if i != '']	
		if len(instances) < MIN_INSTANCES:
			self.launch_instance()
	
	def checker(self):	
		 """Chek the alarms: scale up and scale down
		"""	
		file_ = open("log_health.data", 'r')
		last_health = [i for i in file_.read().split("||") if i != ''][-1]
		try:
			log_cpu = aws_ec2.get_health_log(120, AMI_IMAGE)
		except:
			log_cpu = last_health
		file_.close()
				
		file_inst = open("instances.data", 'r')
		instances = [i for i in file_inst.read().split("||") if i != '']
		## ALARM SCALE UP	
		if float(log_cpu) > float(CPU_LIM_UP) and len(instances) < MAX_INSTANCES:
			self.launch_instance()
		
		## ALARM SCALE DOWN
		if float(log_cpu) < float(CPU_LIM_DOWN) and len(instances) > MIN_INSTANCES:
			print 'removing'
			self.remove_instance()
		
		file_ = open("log_health.data", 'a')
		file_.write(str(log_cpu)+"||")
		file_.close()		
	
	
	def launch_instance(self):	
		 """Launch a new instace and reload the load balnace server
		"""	
		instance = aws_ec2.launch_instance(AMI_IMAGE, KEY_PAIR, INSTANCE_TYPE, SECS_GROUPS, DATA_RUN_SCRIPT)
		self.update()
		
	def remove_instance(self):
		 """Remove the more old instance and reload the load balance server
		"""	
		file_ = open("instances.data", 'r')
		list_inst = [i for i in file_.read().split("||") if i != '']
		if len(list_inst) > 1:
			instance_id = list_inst[0].split("::")[0]
			aws_ec2.delete_instance(instance_id)        
			file_.close()
			self.update()

	def update(self):
		aws_ec2.reload_list()
		load_balance_manager.update_load_balance()
	
c = Resource_Monitor(TIME_RUNNING)
c.start()
