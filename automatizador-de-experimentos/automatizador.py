import os
import csv
import time
import requests
from requests.exceptions import ConnectionError
import numpy
from subprocess import check_output
from subprocess import Popen
from doctor import *
 
 
# quantas requisicoes em cada rate devem ser feitas
REQS_PER_STEP = 100 

# numero de intervalos nos rates
# 5 intervalos, por exemplo entre o rate 1 e 2
# entao os degraus serao 1, 1.25, 1.5, 1.75 e 2 (Por enquanto o ultimo valor entra, se quiser pode tirar)
NO_OF_STEPS = 5
 
# porta da aplicacao servindo load
LOAD_PORT = 5001
 
# porta da aplicacao servindo health
HEALTH_PORT = 5000
 
# numero de requests antes de medir health e checar o tempo de resposta
REQUESTS_PER_CALL = 500
reqs = [REQUESTS_PER_CALL]
 
# esse dicionario serve para habilitar ferramentas de requisicoes http
# deve-se criar uma chave com o nome da ferramenta e o valor eh uma tupla com o formato do comando
COMMAND_FORMAT = {}
 
# exemplo de uso
# formato para o uso do httperf
COMMAND_FORMAT['httperf'] = ("httperf --hog --server={server}"
                             " --port={port} --num-conns={requests}"
                             " --rate={rate} --uri={uri} --print-reply=body")
 
# Roda o comando de fato e retorna o tempo de resposta
# a saida do programa eh ignorada
def shoot(command):
   start_time = time.time()
   p = check_output(command.split(' '))
   print p
   return (time.time() - start_time)
 
 
# funcao para rodar o experimento
# ela divide intervalo de [rate inicial, rate final] em degraus para pegar mais pontos no experimento
# e chama uma funcao para escrever a saida parcial
def run_task(config):
   COMMAND_FORMAT['output'] = config['output'] 
   initial_rate, final_rate = config['initial_rate'], config['final_rate']#get_rate_interval(config)
   health = 0.0
   print 'vai comecar' 
   for rate in rate_range(initial_rate, final_rate): 
       config['rate'] = rate
       command = build_command(config)
       print 'vai comandar com ', command 
       for d_rate in range(REQS_PER_STEP/10):
           print 'olha'
           time_elapsed = shoot(command)
           print 'time_elapsed = ', time_elapsed
           health = get_health(100.0)
           #time_elapsed = shoot(command)
           print 'health foi ', health
           write_data(rate, time_elapsed, health)
       
   print 'vai mudar agora a ordem :D' 
   for rate in rate_range(final_rate, initial_rate): 
       config['rate'] = rate
       command = build_command(config)
       
       for d_rate in range(REQS_PER_STEP/10):
           time_elapsed = shoot(command)
           health = get_health(100.0)
           #time_elapsed = shoot(command)
           write_data(rate, time_elapsed, health)
       
# retorna o health 
#def get_health(address):
#    return requests.get("http://{address}:{health_port}/health/".format(address=address, health_port=HEALTH_PORT)).text
 
# retorna o health 
def _get_health(config):
    return requests.get("http://{server}:{health_port}/health/".format(server=config['server'], health_port=HEALTH_PORT))
 
# retorna a lista de degraus para iterar
def rate_range(initial_rate, final_rate):
    return numpy.linspace(initial_rate, final_rate, num=NO_OF_STEPS, endpoint=True)
 
 
# forma o comando adequado a ferramenta a partir das configuracoes do experimento
def build_command(config):
    command = COMMAND_FORMAT[config['tool']]
    #reqs.append(reqs[-1]+10)
    #print reqs[-1]
    if command.startswith("httperf"):
        return command.format(server=config['server'], port=LOAD_PORT,
                       requests=reqs[-1], rate=config['rate'],
                       uri=config['uri'])
 
    return command
 
# salva os dados no arquivo definido
def write_data(rate, duration, health):
    if not hasattr(write_data, 'index'):
        write_data.index = 0
    else:
        write_data.index += 1
    
    fd = open(COMMAND_FORMAT['output'], 'a')
    output = csv.writer(fd, delimiter=' ')
    output.writerow([write_data.index, rate, health, duration])
