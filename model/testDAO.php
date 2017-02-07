 <head>
<meta charset="UTF-8">
</head> 
<body>

<?php
require_once("include.php");

	

	allDelete();

	//////////////////////
	//		PHRASE 		//
	//////////////////////

	$idRand = rand(1,10000);
	$phrase = new phrase(NULL,$idRand,"Test de phrase");
	$phraseDAO = new phraseDAO();
	$idPhrase = $phraseDAO->insert($phrase);
	if($idPhrase > 0) {
		echo "Phrase marche";
	} else {
		echo "Phrase ne marche pas";
	}

	//////////////////////
	//		CHOIX 		//
	//////////////////////

	$idRand = rand(1,10000);
	$choix = new choix(NULL,$idRand,"Test de choix",1);
	$choixDAO = new choixDAO();
	$idChoix = $choixDAO->insert($choix);

	if($idChoix > 0) {
		echo "choix marche";
	} else {
		echo "choix ne marche pas";
	}

	//////////////////////
	//		ASSOCIE		//
	//////////////////////

	
	$associe = new associe($idPhrase,$idChoix);
	$associeDAO = new associeDAO();
	$returnAssocie = $associeDAO->insert($associe);

	
	if($returnAssocie) {
		echo "associe marche";
	} else {
		echo "associe ne marche pas";
	}



	function allDelete() {
		$dao = new DAO();
		$db = $dao->db;
		$db->exec("DELETE FROM associe;");
		$db->exec("DELETE FROM phrase;");
		$db->exec("DELETE FROM choix;");
	}
	
	//var_dump($associeDAO->getassocieByIdChoix($idChoix));

?>
</body>