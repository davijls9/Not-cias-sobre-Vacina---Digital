$('#formulario_usuario').on("submit",function(e){
	e.preventDefault();
	var nomeUsuario = $('#nome_usuario').val();
	var email_usuario = $('#email').val();
	var cpf = $('#cpf').val();
	var data_nascimento = $('#data_nascimento').val();
	var ddd = $('#ddd').val();
	var telefone = $('#telefone').val();
	var senha = $('#senha').val();
	var confirma_senha = $('#confirma_senha').val();

	if(nomeUsuario=='' || email_usuario=='' || cpf=='' ||data_nascimento=='' ||ddd=='' || telefone=='' ||senha=='' ||confirma_senha==''){
		alert("Preencha todos os campos");
	}else if(senha != confirma_senha){
		alert("o campo confirmar senha seve ser igual ao senha");
	}else{
		$.ajax({
		url:'action.php',
		type: 'POST',
		data:{ nome:nomeUsuario, email:email_usuario,cpf:cpf,
			data_nasc:data_nascimento, ddd_telefone : ddd, telefone: telefone,senha :senha},
		dataType:'json',
		}).done((response)=> {
			alert("Cadastro realizado com sucesso!");
			window.location.replace("../index.php");
		}).fail((error)=> {
			console.log(error);	
		});
	}
	
});