<?php
session_start();
include("config/databaseconnect.php");

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$select = "SELECT * FROM usuario WHERE email = '$login' AND senha= '$senha'";
$result=mysqli_query($conect,$select);

if(mysqli_num_rows($result) > 0 )
{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$row = mysqli_fetch_array($result);
	$_SESSION['id'] = $row[0];
	$_SESSION['nome'] = $row[1];
	header('location:home.php');
}
else{
	$_SESSION['loginErro']="email ou senha inválido";
  	unset ($_SESSION['login']);
  	unset ($_SESSION['senha']);
 	header('location:index.php');
  }
?>