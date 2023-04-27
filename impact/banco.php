<?php
    $conexao =  new mysqli('localhost','root','','dbgeoloc');
    if (mysqli_connect_errno()){
        trigger_error(mysqli_connect_error());
    }
?>