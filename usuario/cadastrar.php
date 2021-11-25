<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cartao Vacina Digital</title>
	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="../css/styles.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
	<div class="sidenav">
		<div class="login-main-text ">
			<h2><b>NOTICIAS SOBRE A VACINA</b></h2>
			<p>Faça login ou registre-se para acessar.</p>
		</div>
	</div>
	<div class="container-fluid">
		<h2 class=" titulo-principal">Cadastrar Usuário</h2>
		<form id="formulario_usuario">
			<div id="usuario-row" class="row container-principal">
				<div class="col-md-8 col-xs-8">
					<div class="form-group">
						<label for="nome" class="text-info">Nome:</label>
						<input type="text" name="nome" id="nome_usuario" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-xs-4">
					<div class="form-group">
						<label for="cpf" class="text-info">Cpf:</label>
						<input type="text" name="cpf" id="cpf" class="form-control">
					</div>
				</div>
				<div class="col-md-8 col-xs-8">
					<div class="form-group">
						<label for="email" class="text-info">Email:</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-xs-4">
					<div class="form-group">
						<label for="data_nascimento" class="text-info">Data de nascimento:</label>
						<input type="text" name="data_nascimento" id="data_nascimento" class="form-control" placeholder="dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off">
					</div>
				</div>


				<div class="col-md-4 col-xs-4">
					<div class="form-group">
						<label for="endereco" class="text-info">Endereco:</label>
						<input type="text" name="ddd" id="endereco" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-xs-4">
					<div class="form-group">
						<label for="telefone" class="text-info">Telefone:</label>
						<input type="text" name="telefone" id="telefone" class="form-control">
					</div>
				</div>
				</br>
				<div class="col-md-5 col-xs-5">
					<div class="form-group">
						<label for="senha" class="text-info">Senha:</label>
						<input type="text" name="senha" id="senha" class="form-control">
					</div>
				</div>
				<div class="col-md-5 col-xs-5">
					<div class="form-group">
						<label for="confirma_senha" class="text-info">Confirmar senha:</label>
						<input type="text" name="confirma_senha" id="confirma_senha" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<br><input type="submit" class="btn btn-success center" value="Salvar">
			</div>
		</form>
		<script src="usuario.js"></script>
	</div>
</body>

</html>