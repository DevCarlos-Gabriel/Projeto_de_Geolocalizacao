<?php
// pegando dados do ajax em post

  $id_usu = filter_input(INPUT_POST, 'codusu');
  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email');
  $senha = filter_input(INPUT_POST, 'senha');
  $codigo_confirmacao = uniqid();

  include_once '../banco.php';

      $sql = "INSERT INTO tbusuario (codusu,nome,email,senha,codconfirm) VALUES(null,'$nome','$email','$senha','$codigo_confirmacao')";

  $insert = mysqli_query($conexao, $sql);

  if($insert==true)
  {
    echo '1';

    //header('Location: cadastro.php?');
  }else{
    echo '0';
    echo ' Erro: ' . mysqli_errno($conexao) . ' - ' . mysqli_error($conexao);

    //header('Location: cadastro.php?');
  }
?>