<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #8</title>
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

          <?php
               if(isset($_GET['login'])){
                if($_GET['login'] == 'ok'){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Atenção!</strong> Login efetuado com exito<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
                }

                  if($_GET['login'] == 'erro'){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Atenção!</strong> Email ou senha Invalidos<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                  }
                  if($_GET['login'] == 'semsessao'){
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Atenção!</strong> Faça login!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                      }

                  if($_GET['login'] == 'logout'){
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Logout efetuado com sucesso!</strong> Faça login!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                  }
                }
            ?>
			
			
			
		
			  

            <div class="col-md-8">
              <div class="mb-4">
              <h3>Fazer login na <strong>Impact</strong></h3>
              <p class="mb-4">Bem-vindo de volta, para se conectar novamente informe seus dados nos campos a seguir.</p>
            </div>
            <form action="../login.php" name="f1" method="POST">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" id="email" name="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Lembrar</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Esqueceu a senha?</a></span> 
              </div>

              <input type="submit" value="Entrar" class="btn text-white btn-block btn-primary">
              
		<div class="_aac1_aaco_aacu_aacy_aad6">
			<p class="_ab25"> 
              "Não tem uma conta? "
              <a class="*1110hf1 xibqb8m x6umtig sibimbud zaqe
             a5y xav7gou x9f619 xlypdohk stüpsk2 xeBuvix xdj2
             66г xili5rnm xat24cr simh&gor xexeäyu x4uap5 x18
             d9169 akhd6sd x16tdsg8 xih12dhg xggylnq ala2a7pz
             _a6hd" href="./cadastro.php" role="link"
             tabindex="0"><span class="_aacl _aaco _aacw _aad0 _aad7" style="green">Cadastre-se</span></a>
            </p>
        </div>
			  
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  
  
  

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>