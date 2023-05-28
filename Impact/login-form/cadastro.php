<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Favicon -->
    <link href="../assets/img/impact_favicon.png" rel="icon">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro Impact</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Fazer cadastro na <strong>Impact</strong></h3>
              <p class="mb-4">Bem-vindo, para realizar seu cadastro informe seus dados nos campos a seguir.</p>
            </div>
      <form action="salvacad.php" method="POST" id="cadastro">
			  
        <a href="../index.php" class="btn mb-2 h-25 text-white" style="text-decoration: none; background-color: #29bb8a;" role="button">Voltar</a>

			  <div class="form-group first">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" Required>
        </div>

			  <div class="form-group first">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email"  Required>
        </div>

        <div class="form-group last mb-4">
          <label for="password">Senha</label>
          <input type="password" class="form-control" name="senha1" id="senha1"  Required>
        </div>

        <div class="form-group last mb-4">
          <label for="password">Informe novamente a Senha</label>
          <input type="password" class="form-control" name="senha2" id="senha2" Required>
        </div>
			  
        <input type="submit" value="Cadastrar" class="btn text-white btn-block btn-primary" id="botao">
        
      </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  
    
    <script src="../js/jquery3.7_.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

    <script>
      $(document).ready(function(){
        
        $('#senha2').on('blur', function() {
          var senha1 = $('#senha1').val();
          var senha2 = $(this).val();
          var but = $('#botao');

          if (senha1 !== senha2) {
            but.prop('type', 'reset');
            Swal.fire('Cuidado!', 'As senhas estam diferentes!', 'warning');
          } else {
            but.prop('type', 'submit');
          }
        });

      
        $("#cadastro").submit(function(event){
          event.preventDefault();

          var idUsuario = $("input[name='id_usu']").val();
          var nome = $("input[name='nome']").val();
          var email = $("input[name='email']").val();
          var senha = $("input[name='senha1']").val();


          $.post("salvacad.php", { codusu: idUsuario, nome: nome, email: email, senha: senha }, function(data) {
            if (data.trim() === '1') {
              /*Swal.fire('Sucesso!', 'Cadastro efetuado com êxito!', 'success');*/

              Swal.fire({
                title: 'Sucesso!',
                text: 'Cadastro efetuado com êxito!',
                icon: 'success',
                timer: 3000, // Tempo em milissegundos (3 segundos)
                showConfirmButton: false
              }).then(function() {
                window.location.href = 'login.php'; // Redirecionar para a página desejada após o tempo definido
              });// fim do then
            } else {
              Swal.fire('Erro!', 'Erro ao cadastrar os dados!', 'error');
            }
          });
        });

      }); // fim do jquery
    </script>
  </body>
</html>