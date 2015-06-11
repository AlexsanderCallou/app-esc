<?php
    require_once 'config/conexao.class.php';
    require_once 'config/crud.class.php';

    $con = new conexao();  // instancia classe de conxao
    $con->connect(); // abre conexao com o banco

    $crud = new crud('cadastro'); // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
    $id = $_GET['id']; //pega id para exclusao caso exista
    $crud->excluir("id = $id"); // exclui o registro com o id que foi passado

    $con->disconnect(); // fecha a conexao

    header("Location: index.php"); // redireciona para a listagem
?>