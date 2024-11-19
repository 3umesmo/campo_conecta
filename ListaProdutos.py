# inportando a biblioteca que conecta com o banco de dados
import mysql.connector

# criando a conecção com o banco de dados
conn = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    database = 'Campo_conecta_teste'
)

# criando o cursor (o cursor executa as ações CRUD)
cursor = conn.cursor()

# CRUD SELECT
comando = f'SELECT * FROM produtos'
cursor.execute(comando)
resultado = cursor.fetchall()

#criando as listas de valores que serão enviadas para a pagina html
produtosId = []
produtosNome = []
produtosDesc = []
produtosQntd = []
produtosValor = []
produtosPeso = []
produtosCidade = []
produtosProdutor = []
produtosQtdMin = []
produtosCategoria = []


#criando variavel que guardará os itens em um codigo HTML para serem expostos depois
listaItensHTML = """"""

#loop que adiciona o valor de cada coluna de cada item encontrado no SELECT
contador = 3
for row in resultado:
    produtosId.append(row[0]) 
    produtosNome.append(row[1]) 
    produtosDesc.append(row[2])  
    produtosQntd.append(row[3])  
    produtosValor.append(row[4]) 
    produtosPeso.append(row[5])
    produtosCidade.append(row[6])  
    produtosProdutor.append(row[7]) 
    produtosQtdMin.append(row[8])
    produtosCategoria.append(row[9])
    cardItem = """
    <div class="col-4">
        <div class="rounded position-relative fruite-item">
            <div class="fruite-img">
                <img src="../static/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
            </div>
            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                <h4>{}</h4>
                <p>{}</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">{} / kg</p>
                    <a href="paginaProduto?id={}&nome={}&desc={}&valor={}&peso={}&cidade={}&produtor={}&pesoMin={}&categoria={}" class="btn border border-secondary rounded-pill px-3 text-primary"> Entrar em contato</a>
                </div>
            </div>
        </div>
    </div>
    """.format(produtosNome[-1], produtosDesc[-1], produtosValor[-1],produtosId[-1], produtosNome[-1], produtosDesc[-1], produtosValor[-1], produtosPeso[-1], produtosCidade[-1], produtosProdutor[-1], produtosQtdMin[-1], produtosCategoria[-1])
    listaItensHTML = listaItensHTML + cardItem
    contador = contador + 1

#fechando a conecção com o BD
cursor.close()
conn.close()