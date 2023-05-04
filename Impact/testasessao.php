<?php
    session_start();
    if(!$_SESSION['login']){
      header('Location: login-form/login.php?login=semsessao');
    }
?>