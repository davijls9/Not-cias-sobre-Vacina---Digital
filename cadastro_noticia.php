<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cartao Vacina Digital</title>
	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
</head>

<body>

	<div class="container-fluid">
		<h2 class=" titulo-principal">Cadastrar Usuário</h2>
		<form id="form_noticia">

			<div id="usuario-row" class="row container-principal">

				<div class="col-md-8 col-xs-8">
					<div class="form-group">
						<label for="titulo" class="text-info">Titulo:</label>
						<input type="text" name="titulo" id="titulo" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-xs-4">
					<div class="form-group">
						<label for="corpo" class="text-info">Corpo:</label>
						<textarea name="corpo" id="corpo" class="form-control" rows="13">
                        </textarea>
					</div>
				</div>
				<div class="col-md-8 col-xs-8">
					<div class="form-group">
						<label for="url" class="text-info">Imagem:</label>
						<input type="text" name="url" id="url" class="form-control">
					</div>
				</div>
            </div>    
			<div class="form-group">
				<br><input type="submit" class ="btn btn-success center" value="Salvar">
			</div>
		</form>
		<script src="cadastro_noticia.js"></script>
	</div>
</body>
</html>