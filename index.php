<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php 
   session_start(); 
   unset ($_SESSION['login']);
   unset ($_SESSION['senha']);?>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cartao Vacina Digital</title>
   <!-- Bootstrap-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <link rel="stylesheet" href="css/login2.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
   integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
   crossorigin="anonymous"></script>
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text ">
         <h2><b>CARTÃO DE VACINA DIGITAL</b></h2>
         <p>Faça login ou registre-se para acessar.</p>
      </div>
   </div>

   <div class="main">
      <div class="col-md-7 col-sm-12">
         <div class="login-form">

            <form method="post" action="validaLogin.php" id="form_login">
               <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control input-login" placeholder="login" name="login">
               </div>
               <div class="form-group">
                  <label>Senha</label>
                  <input type="password" class="form-control input-login" placeholder="senha" name="senha">
               </div>
               <div class="form-group">
               	  <input type="submit" name="submit" class="btn btn-primary form-control" value="Entrar">
               </div>
               <p class="text-center">Não tem uma conta? <a href="usuario/cadastrar.php" class="text-info">Registre-se </a></p> 
            </form>
                     
            	      <?php 
            		if (isset($_SESSION['loginErro'])){ ?>
            			<div class="text-center alert alert-danger" role="alert">
            				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    							   <span aria-hidden="true">&times;</span>
  							   </button>
            		      <?php 
						         echo $_SESSION['loginErro'];
            			      unset($_SESSION['loginErro']);}?>	
            			</div>
         </div>
      </div>
   </div>
</body>

</html>