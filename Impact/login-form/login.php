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

    <title>Impact - Login</title>
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
              <h3>Fazer login na <strong>Impact</strong></h3>
              <p class="mb-4">Bem-vindo de volta, para se conectar novamente informe seus dados nos campos a seguir.</p>
            </div>

            
            <form action="testeLogin.php" method="POST" id="login_form">

            <a href="cadastro.php" class="btn mb-2 h-25 text-white" style="text-decoration: none; background-color: #29bb8a; " role="button">Voltar</a>

              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" id="email" name="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
                
              </div>
              
              <div class="d-flex mb-4 col-6">
                <span class="ml-auto"><a href="#" class="forgot-pass">Esqueceu a senha?</a></span> 
              </div>

              <input type="submit" name="submit" value="Entrar" class="btn text-white btn-block btn-primary">
              
              <div class="_aac1_aaco_aacu_aacy_aad6">
                  <p class="_ab25"> 
                    "Não tem uma conta? "
                    <a href="./cadastro.php" role="link"
                  tabindex="0"><span class="_aacl _aaco _aacw _aad0 _aad7" >Cadastre-se</span></a>
                  </p>
              </div>
			  
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

    <script src="../js/jquery3.7_.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script>

      /*$(document).ready(function(){

        $("#login_form").submit(function(event){
          event.preventDefault();

          var email = $("input[name='email']").val();
          var senha = $("input[name='senha']").val();


          $.post("testeLogin.php", {email: email, senha: senha}, function(dados) {
            if (dados.trim() === '0') {
              Swal.fire({
                title: 'Erro!',
                text: 'Erro, não possível fazer o login com êxito!',
                icon: 'error',
                timer: 3000, // Tempo em milissegundos (3 segundos)
                showConfirmButton: false
              });
            }
          });
        });
      });// Fim do jquery*/

    </script>

  </body>
</html>