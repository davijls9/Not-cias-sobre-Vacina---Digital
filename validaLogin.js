

$('#form_login').on("submit",function(e){
	e.preventDefault();
	var email_usuario = $('#email').val();
	var senha_user = $('#senha').val();    

	if(email_usuario=='' || senha_user==''){
		alert("Preencha todos os campos");
	}else{
        $.ajax({
            url:"https://api-crud-tecweb.herokuapp.com/validar-usuario",
            headers:{
                'Content-Type': 'application/json',
                'Data-Type': "json"			
            },
            type: "POST",
            data: JSON.stringify({
			   "email": email_usuario,
			   "senha": senha_user})
            }).done((response)=> {
                if(response.existeCadastro == true){
                    window.location.replace("home.php");
                }else{
                    alert(response.mensagem);
                } 
            }).fail((error)=> {
                console.log(error);	
            });
		
	}
	
});
