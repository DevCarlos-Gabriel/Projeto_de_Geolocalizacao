<?php
    $host = 'localhost';
    $username = 'root';
    $passwd = '';
    $dbname = 'dbgeoloc';
    

    $conexao = mysqli_connect($host, $username, $passwd, $dbname);

    if ($conexao === false){
        echo "Problemas para conectar ao Banco. Erro: ";
        echo mysqli_connect_errno() . ": " . mysqli_connect_errno();
        die;
    }
?>