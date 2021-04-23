<?php
//iniciando a sessao
session_start();
//conexao com banco de dados
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
  
    $id = mysqli_escape_string($connect, $_POST['id']);
    

//inserindo os dados na base de dados
    $sql = "DELETE FROM clientes WHERE id = '$id'";
//verificando se o camando eu certo
if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Deletado com sucesso !";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "erro ao delectar ! ";
    header('Locatio: ../index.php');
    
endif;
endif;
