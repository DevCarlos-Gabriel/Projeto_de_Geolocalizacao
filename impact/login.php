<?php
    include 'banco.php';
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from tbusuario where email = '$email' and senha = '$senha'";
    //executa comando sql
    $consulta = $conexao->query($sql);

    //testa se deu certo o comando
    if($consulta)
    {
        if($consulta->num_rows > 0)
        {
            session_start();
            $_SESSION['login'] = 'ok';
            $_SESSION['email'] = $email ;
            $linha = $consulta->fetch_array(MYSQLI_ASSOC);
            $_SESSION['codusu'] = $linha['codusu'] ;
          
            /*echo 'Usuário encontrado';*/
            header ('Location: index.php');
        }
        else
        {
            /*echo 'Usuário não encontrado';*/
            header ('Location: login-form/login.php?login=erro');
        }
    }
?>