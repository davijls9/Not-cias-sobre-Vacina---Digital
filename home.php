<?php
session_start();
if ((!isset($_SESSION['valid']) == true)) {
	unset($_SESSION['valid']);
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Noticias sobre Vacina - Digital</title>
	<!-- Bootstrap-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" integrity="sha512-F7WyTLiiiPqvu2pGumDR15med0MDkUIo5VTVyyfECR5DZmCnDhti9q5VID02ItWjq6fvDfMaBaDl2J3WdL1uxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	<div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">Noticias sobre a vacina</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cadastro_noticia.php"><i class="fas fa-clipboard-list"></i> Cadastro de noticia </a>
						</li>
						<li class="nav-item dropdown">
					</ul>
					<form class="form-inline my-2 my-md-0">
						<a class="nav-link active" href="index.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
					</form>
				</div>
			</div>
		</nav>
		<div id="wrapper" class="toggled-card" style=" display: inline;">
			<div class="container-fluid">
				<div id="row" data-masonry='{"percentPosition": true }' id="conteudo" onload="" class="row row-cols-6 container-principal">
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js" integrity="sha512-PqRelaJGXVuQ81N6wjUrRQelCDR7z8RvKGiR9SbSxKHPIt15eJDmIVv9EJgwq0XvgylszsjzvQ0+VyI2WtIshQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
	<script src="https://kit.fontawesome.com/1c258f7783.js" crossorigin="anonymous"></script>
	<script src="js/noticia.js"></script>

</body>

</html>