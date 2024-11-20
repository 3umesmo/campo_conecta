<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Campo Conecta</title>
        <link rel="icon" type="image/x-icon" href="../static/img/IconCampoConecta.jpeg">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../static/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../static/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Brasilia</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">campoconecta@gmail.com</a></small>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/" class="navbar-brand"><h1 class="text-primary display-6">Campo Conecta</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="contato" class="nav-item nav-link">Entre em contato</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <a href="login" class="btn border border-secondary bg-white">Produtor</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
            </div>


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Shop Detail</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Shop Detail</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Single Product Start -->
        <div class="container">
            <div class="row g-4 mt-3">
                <div class="col-5 bg-light">
                    <h1 class="text-center text-black display-4">José Andrade</h1>
                    <div class="bg-ligth"><img src="../static/img/userProdutor_1.png" class="img-fluid rounded" alt="Image"></div>
                    <hr>
                    <p class="mb-0">26 anos produzindo</p>
                    <hr>
                    <p class="mb-0">Emai: joseandrade@gmail.com</p>
                    <hr>
                    <p class="mb-0">telefone: (61) 98832-4492</p>
                    <hr>
                    <p class="mb-0">Olá! Sou José Andrade, agricultor com mais de 20 anos de experiência no cultivo de verduras frescas e saudáveis. 
                        Trabalho com dedicação para trazer o melhor da nossa terra diretamente para a sua mesa.</p>
                    <hr>
                    <a href="editar" class="btn border border-secondary rounded-pill px-3 text-primary">Editar info</a><br>
                    <a href="financeiro" class="btn border border-secondary rounded-pill px-3 text-primary">Gestão Financeira</a>
                </div>
                <div class="col-7 bg-light">
                    <h1 class="text-center text-black display-6">Adicionar novo produto</h1>
                    <p>(Ainda não funcional)</p>
                    <form action="addProduto" method="POST">
                        <div class="mb-3">
                            <label>Seu numero de contato</label>
                            <input type="number" name="numeroProdutor" class="form-control">
                        </div><div class="mb-3">
                        <div class="mb-3">
                            <label>Nome do produto</label>
                            <input type="text" name="nomeProduto" class="form-control">
                        </div><div class="mb-3">
                            <label>Imagem do produto</label>
                            <input type="file" name="imgProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Descriçõ</label>
                            <input type="text" name="descProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Preço unitário</label>
                            <input type="number" name="precoProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Quantidade disponível</label>
                            <input type="text" name="qtdProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Validade do pedido</label>
                            <input type="date" name="validProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Peso do pedido</label>
                            <input type="number" name="pesoProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Cidade onde o produto será vendido</label>
                            <input type="text" name="pesoProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Categoria do produto</label><br>
                            <input type="radio" id="verdura" name="categProduto" value="verdura">
                            <label for="verdura">verdura</label><br>
                            <input type="radio" id="fruta" name="categProduto" value="fruta">
                            <label for="fruta">fruta</label><br>
                            <input type="radio" id="outro" name="categProduto" value="outro">
                            <label for="outro">outro</label>
                        </div>
                        <div class="mb-3">
                            <label>Data atual</label>
                            <input type="date" name="dataProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">ADICIONAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Single Product End -->
    

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Campo Conecta</h1>
                                <p class="text-secondary mb-0">Produtos frescos
                                </p>
                            </a>
                        </div>
    
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Por que comprar na Campo Conecta</h4>
                            <p class="mb-4">Compre em nosso site e apoie produtores locais! Aqui, você encontra produtos frescos e baratos diretamente da zona rural, ajudando os pequenos agricultores a venderem de forma rápida e prática. É bom para você, para o produtor e para a comunidade!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Informações</h4>
                            <a class="btn-link" href="">Contate-nos</a>
                            <a class="btn-link" href="">Politicas de Privacidade</a>
                            <a class="btn-link" href="">Termos e Condições</a>
                            <a class="btn-link" href="">Politicas de Retorno</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contato</h4>
                            <p>Email: campoconecta@gmail.com</p>
                            <p>Celular: 61 94567 8910</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    
    <!-- Template Javascript -->
    <script src="../static/js/main.js"></script>
    </body>

</html>