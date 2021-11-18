
$('#vinculaVacina').submit(function(e){
	e.preventDefault();

	var usuario = $('#id_usuario').val();
	var dataAplic = $('#data_aplicacao').val();
	var doseA = $('#dose_atual').val();
	var dt_prox_aplic = $('#data_proxima_aplicacao').val();
	var vacina = $('#nome_vacina').val();

	if(data_aplicacao==''){
		alert("Data de aplicação não pode ser vazia");
	}else{
		$.ajax({
		url:'vacinaCartao/action.php',
		type: 'POST',
		data:{id_usuario:usuario, nome_vacina:vacina, data_aplicacao:dataAplic,
			data_proxima_aplicacao:dt_prox_aplic,dose_atual:doseA},
			dataType:'json'
	}).done(function(result){
		alert("Cadastro realizado com sucesso!");
		$('#exampleModalLongTitle').hide();
		 window.location.replace("home.php?p=cartao");
		
		
		});
	}
	
});

