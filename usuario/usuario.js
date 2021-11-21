$('#formulario_usuario').on("submit",function(e){
	e.preventDefault();
	var nomeUsuario = $('#nome_usuario').val();
	var email_usuario = $('#email').val();
	var cpf = $('#cpf').val();
	var data_nascimento = $('#data_nascimento').val();
	var endereco = $('#endereco').val();
	var telefone = $('#telefone').val();
	var senha = $('#senha').val();
	var confirma_senha = $('#confirma_senha').val();

	if(nomeUsuario=='' || email_usuario=='' || cpf=='' ||data_nascimento=='' || endereco=='' || telefone=='' ||senha=='' ||confirma_senha==''){
		alert("Preencha todos os campos");
	}else if(senha != confirma_senha){
		alert("o campo confirmar senha seve ser igual ao senha");
	}else{
		$.ajax({
		url:"https://api-crud-tecweb.herokuapp.com/criar-usuario",
		headers:{
			'Content-Type': 'application/json',
			'Data-Type': "json"			
		},
		type: "POST",
		data: JSON.stringify({ "nomeUsuario": nomeUsuario,
			   "dataNascimento": data_nascimento,
			   "email": email_usuario,
			   "cpf": cpf,
			   "telefone": telefone, 
			   "endereco": endereco,
			   "senha": senha})
		}).done((response)=> {
			alert("Cadastro realizado com sucesso!");
			window.location.replace("../index.php");
		}).fail((error)=> {
			console.log(error);	
		});
				
	}
	
});