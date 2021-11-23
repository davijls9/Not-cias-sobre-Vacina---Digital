<?php
session_start();
include("config/databaseconnect.php");

$valid = $_POST['valid'];


if ($valid == true) {
	$_SESSION['valid'] = $valid;
} else {
	header('location:home.php');
}
?>