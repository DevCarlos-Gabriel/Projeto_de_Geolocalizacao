<!doctype html>
<html lang="pt-br">
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
            <form action="salvacad.php" method="POST">
            <?php
              if(isset($_GET['insert'])){
                   if($_GET['insert'] == 'ok'){
                   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Cadastro efetuado com êxito!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                   </div>';
				   
				   
                  }

                 if($_GET['insert'] == 'error'){
                 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Erro ao cadastrar os dados!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                 </div>';
               }
              }
            ?>
			
			<meta http-equiv="refresh" content="5; URL=index.php">
			

          <script>
              function validarSenha(){
                var senha1 = document.getElementById("senha1").value;
                var senha2 = document.getElementById("senha2").value;

                const bot =  document.querySelector('.botao');

                if (senha1 != senha2)
                {
                  alert('senhas diferentes');
                    bot.type = 'reset';
                }else{
                  bot.type = 'submit';
                }
              }
          </script>
			  
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
          <input type="password" class="form-control" name="senha2" id="senha2" onblur="validarSenha()"  Required>
        </div>
			  
        <input type="submit" value="Cadastrar" class="btn text-white btn-block btn-primary botao">
        
              
			  
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