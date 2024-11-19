from main import app
from flask import render_template
from flask import request
from ListaProdutos import *

@app.route("/")
def homepage():
    return render_template("index.php",listaItens = listaItensHTML)

@app.route("/paginaProduto", methods=['GET'])
def pgProduto():
    id = request.args.get('id')
    nome = request.args.get('nome')
    categoria = request.args.get('categoria')
    descricao = request.args.get('desc')
    valor = request.args.get('valor')
    peso = request.args.get('peso')
    cidade = request.args.get('cidade')
    produtor = request.args.get('produtor')
    pesoMin = request.args.get('pesoMin')
    return render_template("shop-detail.php",id=id,nome=nome,categoria=categoria,descricao=descricao,valor=valor,peso=peso,cidade=cidade,produtor=produtor,pesoMin=pesoMin)

@app.route("/verduras")
def pgVerduras():
    return render_template("shop.php")

@app.route("/frutas")
def pgFrutas():
    return render_template("shop.php")

@app.route("/outros")
def pgOutros():
    return render_template("shop.php")

@app.route("/contato")
def pgContato():
    return render_template("contact.php")

@app.route("/gerenciamento")
def pgGerenciamento():
    return render_template("gerenciamento.php")

@app.route("/pagamento", methods=['GET'])
def pgPagamento():
    nome = request.args.get('nome')
    categoria = request.args.get('categoria')
    descricao = request.args.get('descricao')
    qtd = int(request.args.get('qtd'))
    valor = int(request.args.get('valor'))
    valorTotal = valor*qtd
    return render_template("pagamento.php",nome=nome,categoria=categoria,qtd=qtd,valor=valor,valorTotal=valorTotal,descricao=descricao)

@app.route("/consumidor")
def pgConsumidor():
    return render_template("consumidor.php")