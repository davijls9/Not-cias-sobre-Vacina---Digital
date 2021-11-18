<?php
	session_start();
	include_once("../config/databaseconnect.php");
	header('Content-Type: application/json');
	$nome= $_POST['nome'];
	$email= $_POST['email'];
	$data_nascimento= $_POST['data_nasc'];
	$ddd= $_POST['ddd_telefone'];
	$fone= $_POST['telefone'];
	$cpf= $_POST['cpf'];
	$senha= md5($_POST['senha']);

 	$query = "INSERT INTO `usuario` (`nome`, `email`,`cpf`,`data_nascimento`,`ddd`, `telefone`,`senha`) VALUES ('$nome','$email','$cpf','$data_nascimento','$ddd','$fone','$senha')";
 	$result=mysqli_query($conect,$query);

 	
 	if($result){
 		echo json_encode(["status"=>true,"msg"=>"Usuario cadastrada com sucesso"]);
 	}else{
 		echo json_encode(["status"=>false,"msg"=>"Erro ao cadastrar usuario"]);
 	}

 	
 
?>