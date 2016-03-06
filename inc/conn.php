<?php 
	$server	= 'localhost';
	$user	= 'root';
	$pass	= '';
	$db		= 'comandaonline';  
	$conn = mysqli_connect($server, $user,$pass,$db) or trigger_error(mysqli_error());	
	mysqli_query($conn , "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	date_default_timezone_set('America/Sao_Paulo');
?>