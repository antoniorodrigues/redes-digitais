"""Constant attributes from the resource balancer/monitor
"""
## AWS Credentials
S_KEY = "### Your Secret AWS Secret Key ###"
A_KEY = "### Your Secret AWS Access Key ###"
RG = "us-west-2"

AMI_IMAGE = "ami-97206da7"
INSTANCE_TYPE = "t1.micro"
KEY_PAIR = "cittaKeyPair"
SEC_GROUP = "AutoScalingGroup"
SECS_GROUPS = ["AutoScalingGroup"]
SEC_GROUP_DESC = "Sec group for autoscaling aplication"
PORTS_HTTP = [5000]  #publics ports used on service
APP_PORT_TEST = 5000 #port where the application will be run
DATA_RUN_SCRIPT = "#!/bin/bash"

MIN_INSTANCES = 1
MAX_INSTANCES = 4
SERVER = "http://0.0.0.0:5001"
CPU_LIM_UP = 60.0
CPU_LIM_DOWN = 50.0
TIME_AUTOMATIC_CHECKER = 60*60 #30 minutes
