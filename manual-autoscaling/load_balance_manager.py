import os

APP_PORT = 5001
RESTART = """#!/bin/bash
service nginx stop
service nginx start
"""

def generate_config_file(servers):
	return """
upstream loadbalance {
%s
}

gzip_http_version 1.0;
gzip_proxied      any;
gzip_min_length   500;
gzip_disable      "MSIE [1-6]\.";
gzip_types        text/plain text/xml text/css
				  text/javascript
				  application/javascript;

server {
   listen 5001;
   server_name  www.example.com;

   location / {
	  proxy_pass         http://loadbalance/load/; 
	  proxy_redirect     off;
	  proxy_set_header   Host $host;
	  proxy_set_header   X-Real-IP $remote_addr;
	  proxy_set_header   X-Forwarded-For $proxy_add_x_forwarded_for;
	  proxy_set_header   X-Forwarded-Host $server_name;
   }
}
	""" %(servers)

def update_nginx_file():
	file_inst = open("instances.data", 'r')
	instances = [i for i in file_inst.read().split("||") if i != '' and i != '\n']	
	file_inst.close()
	
	list_servers = ""
	weight = 10
	for server in instances[::-1]:
		dns_address = server.split("::")[1]
		if dns_address != "":
			list_servers+= """
	server  %s:%d weight=%d;"""% (dns_address, APP_PORT, max(weight, 1))
			weight-= 5
	
	file_ = open('/etc/nginx/conf.d/loadbalance.conf', 'w')
	file_.write(generate_config_file(list_servers))
	file_.close()
	
	os.system(RESTART)
		
def update_load_balance():
	update_nginx_file()

update_load_balance()
