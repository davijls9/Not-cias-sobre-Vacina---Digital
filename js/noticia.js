$(document).ready(function(){
    gerarNoticia();
});
function gerarNoticia(){
  $.ajax({
    url:"https://api-crud-tecweb.herokuapp.com/listar-todas-noticias",
    headers:{
      'Content-Type': 'application/json',
      'Data-Type': "json"			
    },
    type: "GET"
  }).done((response)=> {
    conteudo = response;
    console.log(response);  
    for(i=0; i<conteudo.length;i++){ 
      console.log(conteudo[i]['idNoticia']);
      console.log(conteudo[i]['titulo']);
      console.log(conteudo[i]['corpo']);
      console.log(conteudo[i]['urlImagem']);

      $("#row").prepend('<div class="card col" id="cards" style="width: 18rem;"><img src="'+conteudo[i]['urlImagem']+'" id="img-card" class="card-img-top" alt="..."><div class="card-body" id="card_body" style="max-height: 250px;  overflow: auto;"><h5 class="card-title">'+conteudo[i]['titulo']+'</h5><p class="card-text">'+conteudo[i]['corpo']+'</p></div></div>');
    }
  }).fail((error)=> {
    console.log(error);	
  });
}   