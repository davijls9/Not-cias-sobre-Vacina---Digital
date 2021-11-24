$('#form_noticia').on("submit",function(e){
	e.preventDefault();
	var titulo = $('#titulo').val();
	var corpo = $('#corpo').val();    
    var url = $('#url').val();

	if(titulo=='' || corpo=='' || url==''){
		alert("Preencha todos os campos");
	}else{
        $.ajax({
            url:"https://api-crud-tecweb.herokuapp.com/criar-noticia",
            headers:{
                'Content-Type': 'application/json',
                'Data-Type': "json"			
            },
            type: "POST",
            data: JSON.stringify({
			   "titulo": titulo,
			   "corpo": corpo,
               "urlImagem": url})
            }).done((response)=> {
                if(response.existeCadastro == true){
                    alert("Noticia Cadastrada com Sucesso!!");
                    window.location.replace("/home.php");
                }else{
                    alert("Noticia Cadastrada com Sucesso!!");
                    window.location.replace("/home.php");
                } 
            }).fail((error)=> {
                console.log(error);	
            });
		
	}
	
});