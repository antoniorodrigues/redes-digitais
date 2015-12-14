from automatizador import *
import os
os.system('export HEAT_INCLUDE_PASSWORD=1')
# Cria um dicionario com as configuracoes basicas para o experimento
config = {}
 
# ferramenta a ser utilizada (por enquanto so funciona com httperf
# mas eh facil suportar outras
config['tool'] = 'httperf'
 
# nome do arquivo para saida de dados
# no formato indice, rate, health, tempo
config['output'] = 'output.cvs'
 
# server para testar
config['server'] = '10.11.3.9'
 
# uri a ser acessada para o load
config['uri'] = '/load/'
 
# rate inicial
config['initial_rate'] = 5 
 
# rate final
config['final_rate'] = 25
print 'vai comecar' 
# iniciar experimento
run_task(config)
