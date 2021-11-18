<?php
	include_once("../config/databaseconnect.php");
	header('Content-Type: application/json');
	
	$usuario = $_POST['id_usuario'];
	$id_vacina= $_POST['nome_vacina'];
	$dose_atual= $_POST['dose_atual'];
	$data_proxima_aplicacao= $_POST['data_proxima_aplicacao'];
	$data_aplicacao= $_POST['data_aplicacao'];

	

 	$query = "INSERT INTO `cartao` (`id_usuario`, `id_vacina`, `data_aplicacao`, `data_proxima_aplicacao`, `dose_atual`) VALUES ('$usuario','$id_vacina','$data_aplicacao','$data_proxima_aplicacao','$dose_atual')";
 	$result=mysqli_query($conect,$query);

 	if($result){
 		echo json_encode(["status"=>true,"msg"=>"Vinculo cadastrado com sucesso"]);
 	}else{
 		echo json_encode(["status"=>false,"msg"=>"Erro ao cadastrar vinculo"]);
 	}

?>