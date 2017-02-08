<?php  
	require_once("include.php");
	$choixDAO = new choixDAO();
	$choix = $choixDAO->getchoixById(141);
	var_dump($choix);

?>