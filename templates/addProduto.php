<?php
    define("HOST","localhost");
    define("USER","root");
    define( "PASS","");
    define("BASE","campo_conecta");

    $conn = new MySQLi(HOST,USER,PASS,BASE);

    $num = $_POST['numeroProdutor'];
    $nome = $_POST['nomeProduto'];
    $img = $_POST['imgProduto'];
    $preco = $_POST['precoProduto'];
    $desc = $_POST['descProduto'];
    $qtd = $_POST['qtdProduto'];
    $validade = $_POST['validProduto'];
    $peso = $_POST['pesoProduto'];
    $city = $_POST['cityProduto'];
    $categoria = $_POST['categProduto'];
    $data = $_POST['dataProduto'];

    $sql = "INSERT INTO produtos VALUES('{$nome}', '{$desc}', 
    '{$preco}'), '{$qtd}', 1, '{$data}', '{$validade}', 
    '{$city}', '{$categoria}', '{$peso}', '{$num}'";

    $res = $conn->query($sql);

    if ($res==true){
        print $res;
        print "<script>alert('Cadastro bem sucedido');</script>";
    }else{
        print "<script>alert('Cadastro mal sucedido');</script>";
        print "<script>location.href='produtor';</script>";   
    }