#coding: utf-8
from flask import Flask, render_template
import sys
import subprocess
from pricing_manager.manager import *

''' ### Pricing Cloud Main ###
 Programa que inicia o serviço pesquisa de preços 
 de plataformas em nuvem para soluções em TI '''

app = Flask(__name__)

@app.route('/test')
@app.route('/test/')
@app.route('/test/<string:expression>', methods=['GET'])
def load_stress(expression='test'):
    return str(expression)

@app.route('/')
@app.route('/home')
@app.route('/home/')
def pagehtml():
    return render_template('main.html')

@app.route('/pricingcloud')
def pricingcloud():
    """ Displays the index page accessible at '/'
    """
    try:
        main()
        return render_template('index.html')
    except:
        return render_template('index.html')



@app.route('/awscloud')
@app.route('/awscloud/')
def awscloud():
    return render_template('awscloud.html')

@app.route('/googlecloud')
@app.route('/googleloud/')
def googlecloud():
    return render_template('googlecloud.html')

@app.route('/azurecloud')
@app.route('/azureloud/')
def azurecloud():
    return render_template('azurecloud.html')

@app.route('/rackspacecloud')
@app.route('/rackspacecloud/')
def rackspacecloud():
    return render_template('rackspacecloud.html')

@app.route('/uolcloud')
@app.route('/uolcloud/')
def uolcloud():
    return render_template('uolcloud.html')

@app.route('/locawebcloud')
@app.route('/locawebcloud/')
def locawebcloud():
    return render_template('locawebcloud.html')


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5001, threaded=True)
