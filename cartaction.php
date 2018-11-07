<?php 
	session_start();
	require('connect.php');
	
	$data = $_GET['data'];
	$products = explode("@",$data);
	print_r($products);
	print_r(explode("->",$products[0]));
	
		
	

?>