import boto.ec2
from resource_conf import *
import datetime
from boto.ec2.cloudwatch import CloudWatchConnection

""" Create the AWS EC2 connection"""
conn = boto.ec2.connect_to_region(RG, aws_access_key_id=A_KEY, aws_secret_access_key=S_KEY)
conn3 = boto.ec2.cloudwatch.connect_to_region(RG, aws_access_key_id=A_KEY, aws_secret_access_key=S_KEY)

def launch_instance(ami_image_id, mykey, instance_type, sec_group, data_script):
    """Launch a new instance with input parameters
    """
    instace_reservation = conn.run_instances(
        image_id=ami_image_id,
        key_name=mykey,
        instance_type=instance_type,        
        security_groups=sec_group,
        monitoring_enabled=True)
    return instace_reservation

def list_intances():
    """List all instances created ins yout ec2 count
    """
    return conn.get_all_instances()

def get_intance(inst):
    """Return the aws instance with the parameter  id
    """
    return conn.get_all_instances(instance_ids=[inst])

def delete_instance(instanceId):
    """Delete the aws instance with the parameter  id
    """
    conn.terminate_instances(instance_ids=[instanceId])

def create_SecGroup(groupName, groupDesc, httpPorts):
    try:
        web = conn.create_security_group(groupName, groupDesc)
        for port in httpPorts:
            web.authorize('tcp', int(port), int(port), '0.0.0.0/0')
        return "SecurityGroup created"
    except:
        return "Error: Group already exists"
        
def get_health_log(time_elapsed, ami):
	health_log = conn3.get_metric_statistics(60,
                                        datetime.datetime.utcnow() - datetime.timedelta(seconds=time_elapsed),
                                        datetime.datetime.utcnow(), 'CPUUtilization', 'AWS/EC2',
                                        'Average',
                                        dimensions={'ImageId':[ami]})
	return dict(health_log[-1])[u'Average']
	


def reload_list():
	list_inst = [i.instances[0] for i in conn.get_all_instances() if i.instances[0].image_id == AMI_IMAGE and (i.instances[0].state == 'running')]
	sort_list = [(get_time(inst.launch_time), inst.id, inst.public_dns_name) for inst in list_inst]		
	sort_list.sort() 
	
	file_ = open("instances.data", 'w')
	for inst in sort_list:
		file_.write(inst[1]+ "::" + inst[2] +"||")
	file_.close()

def get_time(str_time):
	date_ = str_time.split('-')
	year = int(date_[0])
	month = int(date_[1])
	day = int(date_[2][0:2])
	
	time_ = date_[2][3:-1].split(':')
	hour = int(time_[0])
	minutes = int(time_[1])
	secs = int(time_[1])
	
	return datetime.datetime(year, day, month, hour, minutes, secs)

