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
    data = request.args.get('data')
    validade = request.args.get('validade')
    produtor = request.args.get('produtor')
    tel = request.args.get('numTelefone')
    qtd = request.args.get('qtd')

    return render_template("shop-detail.php",qtd=qtd,data=data,validade=validade,tel=tel,id=id,nome=nome,categoria=categoria,descricao=descricao,valor=valor,peso=peso,cidade=cidade,produtor=produtor)

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

@app.route("/financeiro")
def pgGerenciamento():
    return render_template("financeiro.php")

@app.route("/editar")
def pgEditar():
    return render_template("editarUser.php")

@app.route("/pagamento", methods=['GET'])
def pgPagamento():
    id = request.args.get('id')
    nome = request.args.get('nome')
    categoria = request.args.get('categoria')
    descricao = request.args.get('descricao')
    tel = request.args.get('telefone')
    qtd = int(request.args.get('qtd'))
    valor = int(float(request.args.get('valor')))
    valorTotal = valor*qtd
    return render_template("pagamento.php",id=id,nome=nome,categoria=categoria,qtd=qtd,valor=valor,valorTotal=valorTotal,descricao=descricao,tel=tel)

@app.route("/login")
def pgLogin():
    return render_template("login.php")

@app.route("/produtor", methods=['POST'])
def pgProdutor():
    return render_template("produtor.php")

@app.route("/addProduto", methods=['GET'])
def pgAddProduto():
    img = request.args.get('imgProduto')
    nome = request.args.get('nomeProduto')
    categoria = request.args.get('categProduto')
    descricao = request.args.get('descProduto')
    valor = request.args.get('precoProduto')
    peso = request.args.get('pesoProduto')
    cidade = request.args.get('pesoProduto')
    produtor = request.args.get('produtor')
    data = request.args.get('dataProduto')
    validade = request.args.get('validProduto')
    produtor = request.args.get('produtor')
    tel = request.args.get('numeroProdutor')
    qtd = request.args.get('qtdProduto')
    return render_template("addProduto.php",img=img,qtd=qtd,data=data,validade=validade,tel=tel,id=id,nome=nome,categoria=categoria,descricao=descricao,valor=valor,peso=peso,cidade=cidade,produtor=produtor)
