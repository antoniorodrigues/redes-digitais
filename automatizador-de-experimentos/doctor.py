import boto.ec2
#import boto
import datetime

from boto.ec2.autoscale import AutoScaleConnection
from boto.ec2.cloudwatch import CloudWatchConnection

S_KEY = "fPLwgujMgisBZx6z3nlfiNadRJ93C/2TgxDnoX3m"
A_KEY = "AKIAJ2EHCXP3NGRIJW7Q"
RG = "us-west-2"

GROUP_NAME = 'experiment-autoscaling-WebServerGroup-1SNV68LQOLQFL'
AMI = 'ami-69490b59'

OS_USERNAME="andreleite"
OS_PASSWORD="root00"
OS_TENANT_NAME="Silibrina"
OS_AUTH_URL="http://controller:5000/v2.0/"
CEILOMETER_ENDPOINT="http://controller:8777"

""" Create the AWS EC2 connection"""
conn3 = boto.ec2.cloudwatch.connect_to_region(RG, aws_access_key_id=A_KEY, aws_secret_access_key=S_KEY)

#conn3.get_metric_statistics(period, start_time, end_time, metric_name, namespace, statistics, dimensions=None, unit=None)
#        dimensions={'AutoScalingGroupName':['Autoscaling-Exp-WebServerGroup-L0CTTD7C7CHR']}
def _get_health(time_elapsed, parameter=""):
	if parameter == 'IMAGE':
		dim = {'ImageId':[AMI]}
	else:
		dim = {'AutoScalingGroupName':[GROUP_NAME]}
	s = conn3.get_metric_statistics(120,
                                        datetime.datetime.utcnow() - datetime.timedelta(seconds=time_elapsed),
                                        datetime.datetime.utcnow(), 'CPUUtilization', 'AWS/EC2',
                                        'Average',
                                        dimensions={'AutoScalingGroupName': [GROUP_NAME]})
	#print s
	#l = []
	#for met in s:
	#	print dict(met)[u'Average']
	#	l.append(dict(met)[u'Average'])
	#return l
	
	return dict(s[0])[u'Average']

from keystoneclient.v2_0.client import Client as KC
kc = KC(username=OS_USERNAME, password=OS_PASSWORD, tenant_name=OS_TENANT_NAME,
        auth_url=OS_AUTH_URL)

auth_token = kc.service_catalog.catalog['token']['id']
tenant_id = 'c460558413694a8e9055b492fedf8f71'
heat_url = 'http://controller:8004/v1/%s' % tenant_id

import ceilometerclient.v2 as c_client

auth_token = kc.auth_token
ceilometer = c_client.Client(endpoint=CEILOMETER_ENDPOINT, token= lambda : auth_token )

STACK_ID = '0cf4b1e5-20a1-4cb8-8644-cda5cb1825d4'
import os
os.system('export HEAT_INCLUDE_PASSWORD=1')

from heatclient.client import Client
from heatclient.v1.stacks import StackManager

_heat = Client('1', endpoint=heat_url, token=auth_token)
def get_health(time_elapsed, parameter=""):
    try:
        _stack = _heat.stacks.get(STACK_ID)
    except:
        auth_token = kc.auth_token
        ceilometer = c_client.Client(endpoint=CEILOMETER_ENDPOINT, token= lambda : auth_token )
        _heat = Client('1', endpoint=heat_url, token=auth_token)
        _stack = _heat.stacks.get(STACK_ID)
    query = [dict(field='metadata.user_metadata.stack', op='eq', value=_stack.id)]
    result = ceilometer.statistics.list('cpu_util', q=query, period=100)
    if len(result) > 0:
        print 'PEGOU RESULTADO, AMIGO'
        print result[-1].avg
        return result[-1].avg

