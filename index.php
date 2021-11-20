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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   <link rel="stylesheet" href="css/login2.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
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