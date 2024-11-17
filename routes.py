from main import app
from flask import render_template
from ListaProdutos import *

@app.route("/")
def homepage():
    return render_template("index.php",listaItens = listaItensHTML)

@app.route("/blog")
def blog():
    return "Blog"