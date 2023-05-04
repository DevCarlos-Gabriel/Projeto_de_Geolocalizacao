<?php
  include('../banco.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha1'];
  $codigo_confirmacao = uniqid();

      // Verificar a ordem dos valores a seguir
  $sql = "insert into tbusuario (cod_usu,nome,email,senha,codconfirm)
                       values(null,'$nome','$email','$senha','$codigo_confirmacao')";

  $assunto = "Confirmação de cadastro";
  $mensagem = "Olá $nome, por favor clique no link abaixo para confirmar seu cadastro: http://seusite.com/confirmacao.php?codigo=$codigo_confirmacao";

  $insert = $conexao->query($sql);

  if($insert==true)
  {
    header('Location: cadastro.php?insert=ok');
  }else{
    header('Location: cadastro.php?insert=error');
  }
?>