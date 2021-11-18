
<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php
include("config/databaseconnect.php");
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
 }
$logado = $_SESSION['id'];
$nomeUsuario = $_SESSION['nome'];
?>
	<meta charset="UTF-8">
	<title>Cartao Vacina Digital</title>
	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1c258f7783.js" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar fixed-top navbar-expand navbar-dark bg-primary" id="barra-superior">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
			<ul class="navbar-nav">
				<li class="nav-item active"> <a class="nav-link " href="home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a> </li>
				
			</div>

			<div class="mx-auto order-0">
				<a class="navbar-brand mx-auto" >CARTÃO DE VACINA</a>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active" id=logout> 
						<a class="nav-link active" href="index.php"><i class="fas fa-sign-out-alt"></i>Sair</a> 
					</li>
				</ul>
			</div>
		</ul>
	</nav>
	<div id="wrapper" class="toggled">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand font-weight-bold"> Olá, <?php echo $nomeUsuario; ?></li>
				<li> <a href="./home.php?p=">Página Inicial</a> </li>
				<li> <a href="./home.php?p=cadastraUsuario">Meu Perfil</a> </li>
				<li> <a href="./home.php?p=cartao">Visualizar Cartão</a> </li>
				<li> <a href="./home.php?p=listarVacina">Cadastrar Vacina</a> </li>
				<li> <a href="./home.php?p=relatorio">Relatorio</a> </li>
				<li> <a href="#">Fale conosco</a> </li>
				<li> <a href="index.php">Sair</a> </li>
			</ul>
		</div> 
		<div class="container-fluid" id="conteudo">

				<?php
				include("config/databaseconnect.php");

				$valor = @$_GET['p'];
				if($valor=='cadastraUsuario'){ require_once 'usuario/listar.php';}
				elseif (@$_GET['p']=='listarVacina') { require_once 'vacina/listar.php';}
				elseif ($valor=='cartao') { require_once 'cartao/listar.php';}
				elseif ($valor=='cadastraVacina') { require_once 'vacina/cadastrar.php';}
				elseif ($valor=='') { require_once 'principal.php';}
				elseif ($valor=='relatorio') { require_once 'relatorio/listar.php';}
				?>

		</div> 
	</div>
</body>

</html>