$(document).ready(function(){
	var doseUnica = document.querySelector('input[name="dose_unica"]:checked').value;
	if(doseUnica =='Y'){
		$('#qtd_dose').prop('disabled',true);
		$('#qtd_dose').val(1);
	    $('#intervalo_dias').prop('disabled',true);
	    $('#intervalo_dias').val(0);
	}else{
		$('#qtd_dose').prop('disabled',false);
		$('#qtd_dose').val('');
	    $('#intervalo_dias').prop('disabled',false);
	    $('#intervalo_dias').val('');
	}
	$('input[name="dose_unica"]').change(function() { 
		var doseUnica = document.querySelector('input[name="dose_unica"]:checked').value;
		if(doseUnica =='Y'){
			$('#qtd_dose').prop('disabled',true);
			$('#qtd_dose').val(1);
		    $('#intervalo_dias').prop('disabled',true);
		    $('#intervalo_dias').val(0);
		}else{
			$('#qtd_dose').prop('disabled',false);
			$('#qtd_dose').val('');
		    $('#intervalo_dias').prop('disabled',false);
		    $('#intervalo_dias').val('');
		}                            
	});
});

$('#formulario_vacina').on("submit",function(e){
	e.preventDefault();
	var doseUnica = document.querySelector('input[name="dose_unica"]:checked').value;
	var nomeVacina = $('#nome_vacina').val();
	var fabricanteVacina = $('#fabricante').val();
	var tipo = $('#tipo_vacina').val();
	var qtdDose = $('#qtd_dose').val();
	var intervaloDias = $('#intervalo_dias').val();

	$.ajax({
		url:'vacina/action.php',
		type: 'POST',
		data:{ nome_vacina:nomeVacina, fabricante:fabricanteVacina,tipo_vacina:tipo,
			qtd_dose:qtdDose, dose_unica : doseUnica, intervalo_dias: intervaloDias},
		dataType:'json',
	}).done((response)=> {
		$("#msg").html('<div class="alert alert-success text-center" role="alert">'+response.msg+'</div>');
		$("#formulario_vacina")[0].reset();
		 console.log(response);
		 // window.location.replace("home.php?p=listarVacina");
	}).fail((error)=> {
		$("#msg").html('<div class="alert alert-danger text-center" role="alert">'+response.msg+'</div>');
		console.log(error);
			
	});
});

