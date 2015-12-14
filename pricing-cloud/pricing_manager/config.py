### AWS pricing search ###

## GENERATION INSTANCES TYPES ##
NEW, OLD = "New Generation", "Old Generation"

## AVALIABLES SYSTEMS ##
LINUX, WINDOWS = "Linux", "Windows"

## LINUX ##
SPOT_INFO = "http://spot-price.s3.amazonaws.com/spot.js"
STORAGED_SERVER_AWS = "http://a0.awsstatic.com/pricing/1/ebs/pricing-ebs.min.js"

OLD_GENERATION_ON_DEMAND = "http://a0.awsstatic.com/pricing/1/ec2/previous-generation/linux-od.min.js"
OLD_GENERATION_SPOT = ["http://a0.awsstatic.com/pricing/1/ec2/previous-generation/light_linux.min.js",
				"http://a0.awsstatic.com/pricing/1/ec2/previous-generation/light_redhatlinux.min.js",
				"http://a0.awsstatic.com/pricing/1/ec2/previous-generation/light_suselinux.min.js"]
				
NEW_GENERATION_ON_DEMAND = "http://a0.awsstatic.com/pricing/1/ec2/linux-od.min.js"
NEW_GENERATION_SPOT = ["http://a0.awsstatic.com/pricing/1/ec2/linux-ri-light.min.js", 
				"http://a0.awsstatic.com/pricing/1/ec2/linux-ri-medium.min.js", 
				"http://a0.awsstatic.com/pricing/1/ec2/linux-ri-heavy.min.js"]

				
## WINDOWS ##
WIN_NEW_GENERATION_ON_DEMAND = 'http://a0.awsstatic.com/pricing/1/ec2/mswin-od.min.js'
WIN_OLD_GENERATION_ON_DEMAND = "http://a0.awsstatic.com/pricing/1/ec2/previous-generation/mswin-od.min.js"

ON_DEMAND =  {LINUX: {NEW:NEW_GENERATION_ON_DEMAND, OLD:OLD_GENERATION_ON_DEMAND}, 
			  WINDOWS: {NEW:WIN_NEW_GENERATION_ON_DEMAND, OLD:WIN_OLD_GENERATION_ON_DEMAND}}
GENERATIONS = {NEW:"NEW", OLD:"OLD"}
###########
REGION = 'us-east-1' #Region with cheap price
REGION2 = 'sa-east-1'
REGIONS = {'ap-northeast-1':'Asia Pacific (Tokyo)', 'ap-northeast':'Asia Pacific (Tokyo)',  'apac-tokyo':'Asia Pacific (Tokyo)',
		'ap-southeast-1':'Asia Pacific (Singapore)', 'ap-southeast':'Asia Pacific (Singapore)', 'apac-sin':'Asia Pacific (Singapore)',
		'ap-southeast-2':'Asia Pacific (Sydney)','apac-syd':'Asia Pacific (Sydney)',
		'eu-central-1':'EU (Frankfurt)', 'eu-central':'EU (Frankfurt)',
		'eu-ireland':'EU (Frankfurt)',
		'eu-west-1':'EU (Ireland)', 'eu-west':'EU (Ireland)',
		'sa-east-1':'South America (Sao Paulo)',  'sa-east':'South America (Sao Paulo)', 
		'us-east-1':'US East (N. Virginia)', 'us-east':'US East (N. Virginia)',
		'us-west-1':'US West (N. California)', 'us-west':'US West (N. California)',
		'us-west-2':'US West (Oregon)'}
		
		
## GOOGLE ##
GOOGLE_SERVER = "https://cloud.google.com/pricing/"
GOOGLE_REGIONS = ["US hoste", "Europe/APAC hosted"]
MEM_DEF = [1, 2, 4, 8, 15, 20, 30, 60, 90, 120]
COT = 0.0



## RACKSPACE ##
RACKSPACE_SERVER = "http://www.rackspace.com/cloud/public-pricing"
STORAGED_SERVER_RACKSPACE = 'http://www.rackspace.com/pt/cloud/block-storage'

##General Constants ##
REG_US = 'US'
REG_BR1 = 'BR-1'
REG_BR2 = 'BR-2'
