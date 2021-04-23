<?php
//iniciando a sessao
session_start();
//conexao com banco de dados
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome'] );
    $disciplinas = mysqli_escape_string($connect, $_POST['disciplinas']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    

//inserindo os dados na base de dados
    $sql ="UPDATE clientes SET nome = '$nome', disciplinas='$disciplinas' , celular='$celular' WHERE id='$id'";
//verificando se o camando eu certo
if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com sucesso !";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "erro ao atualizar ! ";
    header('Locatio: ../index.php');
    
endif;
endif;
