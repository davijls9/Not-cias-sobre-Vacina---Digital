<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Noticias sobre Vacina - Digital</title>
	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<div class="cover-container d-flex h-100 mx-auto flex-column">
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
		<div id="wrapper" class="toggled" style="margin-left: 5%; display: inline;">
			<div class="container-fluid" id="conteudo">
			</div>
		</div>
		<div class="container-fluid" style="display: inline;">
			<h2 class=" titulo-principal">Cadastrar noticia</h2>
			<form id="form_noticia">
				<div id="usuario-row" class="row row-cols-1 container-principal">
					<div class="col">
						<div class="form-group">
							<label for="titulo" class="text-info">Titulo:</label>
							<input type="text" name="titulo" id="titulo" class="form-control">
						</div>
					</div>
					</br>
					<div class="col">
						<div class="form-group">
							<label for="corpo" class="text-info">Corpo:</label>
							<textarea name="corpo" id="corpo" class="form-control" rows="13">
                        </textarea>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="url" class="text-info">Imagem:</label>
							<input type="text" name="url" id="url" class="form-control">
						</div>
					</div>
					<div class="col">
						<br><input type="submit" class="btn btn-success center" value="Salvar">
					</div>
				</div>

			</form>
			<script src="cadastro_noticia.js"></script>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1c258f7783.js" crossorigin="anonymous"></script>
</body>

</html>