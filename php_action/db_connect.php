<?php
//conexao com base de dados myqsl
$servaname = "localhost";
$username = "root";
$password = "";
$db_name ="crud";


//abrindo a conexao
$connect = mysqli_connect($servaname, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()):
    echo "erro na conexao: ". mysqli_connect_error();
endif;
