<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php 
   session_start(); 
   unset ($_SESSION['login']);
   unset ($_SESSION['senha']);?>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="google-signin-client_id" content="363938781453-ut8fssda9qgoip6ipato9hh68u1tjcol.apps.googleusercontent.com">


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
   <div class="main">
      <div class="col-md-7 col-sm-12">
         <div class="login-form">

            <form id="form_login">
               <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control input-login" placeholder="login" id="email" name="login">
               </div>
               <div class="form-group">
                  <label>Senha</label>
                  <input type="password" class="form-control input-login" placeholder="senha" id="senha" name="senha">
               </div>
               <div class="form-group">
               	  <input type="submit" name="submit" class="btn btn-primary form-control" value="Entrar">
               </div>
               <div class="container body-content">
                  <div class="box-login">
                     <div id="meu-botao"></div> 
                     <hr/>                    
                  </div>
               </div>   

               <p class="text-center">Não tem uma conta? <a href="usuario/cadastrar.php" class="text-info">Registre-se </a></p> 
            </form>
            <script src="validaLogin.js"></script>
         </div>
      </div>
      <script src="oauth.js"></script>

<!--Google Platform Library-->
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


</body>
</html>

   </div>
</body>

</html>