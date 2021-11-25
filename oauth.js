/**
  Renderiza o botão de login na tela
*/
function renderButton() {
    gapi.signin2.render('meu-botao', {
        'scope': 'email profile https://www.googleapis.com/auth/plus.login', // solicitando acesso ao profile e ao e-mail do usuário
        'width': 250,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}

/**
  Função executada quando o login é efetuado com sucesso
*/
function onSuccess(googleUser) {
    // Recuperando o profile do usuário
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); 
    console.log("Name: " + profile.getName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    // Recuperando o token do usuario. 
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);


    // Redirecionando para a home page
    $.ajax({
      url: "validaLogin.php",
      data: "valid=true",
      type: "POST",
  }).done((response)=>{
      window.location.replace("home.php");
  });
}

/**
  Função executada quando ocorrer falha no login
*/
function onFailure(error) {
    console.log(error);
}
