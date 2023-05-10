<?php
    include 'banco.php';
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from tbusuario where email = '$email' and senha = '$senha'";
    //executa comando sql
    $consulta = $conexao->query($sql);


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

            (header( 'Location: login-form/login.php?login=ok' ));
            exit;
            
            $espera= 2;
            sleep($espera);

            if(!isset($_GET[])){}
            header( 'Location: index.php?login=ok' );
            exit;
        }
        else
        {
            /*echo 'Usuário não encontrado';*/
            header ('Location: index.php?login=erro');
        }
    }
    /*if($consulta)
    {
        if($consulta->num_rows > 0)
        {
            session_start();
            $_SESSION['login'] = 'ok';
            $_SESSION['email'] = $email ;
            $_SESSION['codusu'] = $linha['codusu'] ;
            $linha = $consulta->fetch_array(MYSQLI_ASSOC);
  
            header( 'Location: login-form/login.php?login=ok' );
            sleep(5);
            header( 'Location: index.php?login=ok' );
             
        }
        else
        {
            echo 'Usuário não encontrado';
            header ('Location: login-form/login.php?login=erro');
        }
    }*/
?>