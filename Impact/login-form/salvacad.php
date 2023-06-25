<?php
  /*$nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email');
  $senha = filter_input(INPUT_POST, 'senha');
  $codigo_confirmacao = uniqid();
  
  include_once '../banco.php';
  
  // Verifica se um arquivo foi enviado
  if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];
  
    // Verifica se não houve erro durante o envio do arquivo
    if ($avatar['error'] === UPLOAD_ERR_OK) {
      // Define o diretório de destino para salvar a imagem
      $diretorio_destino = '../imgs';
  
      // Gera um nome único para o arquivo de imagem
      $nome_arquivo = uniqid() . '_' . $avatar['name'];
  
      // Move o arquivo da pasta temporária para o diretório de destino
      if (move_uploaded_file($avatar['tmp_name'], $diretorio_destino . $nome_arquivo)) {
        // Caminho completo para o arquivo de imagem
        $caminho_imagem = $diretorio_destino .'/'. $nome_arquivo;
  
        // Insira o caminho da imagem no banco de dados ou faça outras ações necessárias
        $sql = "INSERT INTO tbusuario (codusu, nome, email, senha, codconfirm, avatar) VALUES (null, '$nome', '$email', '$senha', '$codigo_confirmacao', '$caminho_imagem')";
        
        $insert = mysqli_query($conexao, $sql);
  
        if ($insert) {
          echo '1';
        } else {
          echo '0';
          echo ' Erro: ' . mysqli_errno($conexao) . ' - ' . mysqli_error($conexao);
        }
      } else {
        echo '0';
        echo 'Erro ao mover o arquivo para o diretório de destino.';
      }
    } else {
      echo '0';
      echo 'Erro no envio do arquivo: ' . $avatar['error'];
    }
  } else {
    echo '0';
    echo 'Nenhum arquivo enviado.';
  }
*/

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