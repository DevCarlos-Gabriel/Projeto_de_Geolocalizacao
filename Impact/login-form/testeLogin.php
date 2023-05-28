<?php
    session_start();
    // !empty() -> Significa que não pode estar vazio.
    
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Deixa acessar o sistema.
        include_once('../banco.php');

        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM tbusuario WHERE email = '$email' and senha = '$senha'";

        //print_r($sql);

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            //Não existe pessoa logada com esse email senha.
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../sistema.php');
        }
    }
    else{
        //Não deixa acessar o sistema.
        header('Location: login.php?login=erro');
    }
?>