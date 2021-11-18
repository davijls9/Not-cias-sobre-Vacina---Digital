<?php
	$select="SELECT * FROM usuario WHERE id='$logado' ";
	$result=mysqli_query($conect,$select);
	// print_r(mysqli_fetch_assoc($result));
	while ($rows = mysqli_fetch_assoc($result)) {
		$id=$rows['id'];
		$nome=$rows['nome'];
		$cpf=$rows['cpf'];
		$data_nascimeto=$rows['data_nascimento'];
		$email=$rows['email'];
		$telefone =$rows['telefone'];
		$senha=$rows['senha'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<body>
	<div class="container container-principal">
		<h2 class=" titulo-principal">Meu Usúario</h2>

		<div id="vacina-row" class="row container-principal">
			<!-- <form id="usuario"> -->
			<input type="hidden" name="id" id="id" value=<?php echo $id ?>>
			<div class="col-md-8 col-xs-8">
				<div class="form-group">
					<label for="nome" class="text-info">Nome:</label>
					<input  type="text" id="nome" class="form-control input-login" value=<?php echo $nome ?>>
				</div>
			</div>
			<div class="col-md-4 col-xs-4">
				<div class="form-group">
					<label for="cpf_usuario" class="text-info">Cpf:</label>
					<input type="text" name="cpf_usuario" id="cpf_usuario" class="form-control input-login"value=<?php echo $cpf ?>>
				</div>
			</div>
			<div class="col-md-8 col-xs-8">
				<div class="form-group">
					<label for="email" class="text-info">Email:</label>
					<input type="email" name="username" id="email" class="form-control input-login" value=<?php echo $email ?>>
				</div>
			</div>
			<div class="col-md-4 col-xs-4">
				<div class="form-group">
					<label for="data-nascimeto" class="text-info">Data de nascimento:</label>
					<input type="date" name="data-nascimeto" id="data-nascimeto" class="form-control input-login" placeholder="dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off" value=<?php echo $data_nascimeto ?>>
				</div>
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="form-group">
					<label for="telefone" class="text-info">Telefone:</label>
					<input type="tel" name="telefone" id="telefone" class="form-control input-login"  maxlength="9" autocomplete="off" value=<?php echo $telefone ?>>
				</div>
			</div>
			<!-- <div class="conteiner" id="senha"> -->
				<div class="col-md-6 col-xs-6">
					<div class="form-group">
						<label for="senha" class="text-info">Senha:</label>
						<input type="password" name="data-nascimeto" id="senha" class="form-control input-login" value=<?php echo $senha ?>>
					</div>
				</div>
			</form>
			

		<div class="form-group">
			<br><input type="button" name="submit" class="btn btn-success center" value="Salvar" id="enviar">
			<input type="hidden"id="metodo" value="formulario-ajax" />
		</div>
<!-- 	</form> -->
</div>
	</div>
</div>
</div>
<!-- </div> -->
</body>
</html>
