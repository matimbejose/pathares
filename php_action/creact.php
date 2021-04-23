<?php
//iniciando a sessao
session_start();
//conexao com banco de dados
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome'] );
    $disciplinas = mysqli_escape_string($connect, $_POST['disciplinas']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);

//inserindo os dados na base de dados
    $sql ="INSERT INTO clientes (nome, disciplinas, celular) VALUES ('$nome' , '$disciplinas', '$celular')";
//verificando se o camando eu certo
if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "cadastrado com sucesso !";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "erro ao cadastrar ! ";
    header('Locatio: ../index.php');
    
endif;
endif;
