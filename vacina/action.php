<?php
	session_start();
	include_once("../config/databaseconnect.php");
	// header('Content-Type: application/json');
	$nome_vacina= $_POST['nome_vacina'];
	$fabricante= $_POST['fabricante'];
	$tipo_vacina= $_POST['tipo_vacina'];
	$qtd_dose= $_POST['qtd_dose'];
	$dose_unica= $_POST['dose_unica'];
	$intervalo_dias= $_POST['intervalo_dias'];
	

 	$query = "INSERT INTO `vacina` (`nome`, `fabricante`,`id_tipo_vacina`,`dose_unica`,`intervalo_dias`, `qtd_dose`) VALUES ('$nome_vacina','$fabricante',$tipo_vacina,'$dose_unica','$intervalo_dias','$qtd_dose')";
 	$result=mysqli_query($conect,$query);

 	
 	if($result){
 		echo json_encode(["status"=>true,"msg"=>"Vacina cadastrada com sucesso"]);
 	}else{
 		echo json_encode(["status"=>false,"msg"=>"Erro ao cadastrar vacina"]);
 	}

 	
 
?>