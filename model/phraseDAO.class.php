<?php
require_once("phrase.class.php");
require_once("choix.class.php");
require_once("DAO.class.php");

class phraseDAO {
	private $db;
	function __construct() {
		$dao = new DAO();
		$this->db = $dao->db;
	}

	function getAll() {
		$req = "SELECT * FROM `phrase` ORDER BY `idPhrase`;";
		$res = $this->db->query($req);
		$phrases = $res->fetchAll(PDO::FETCH_NUM);
		$comptable = [];
        foreach ($phrases as $phrase) {
            $comptable[] = $phrase[0];
        }
		return $comptable;		
	}

	function getPhraseById($idPhrase) {
		$req = "SELECT * FROM `phrase` WHERE `idPhrase` = '$idPhrase';";
		$res = $this->db->query($req);
		$phrase = $res->fetchAll(PDO::FETCH_CLASS, "phrase");
		if ($phrase) {
			return $phrase[0];
		} else {
			return null;
		}
	}

	function getPhraseByIdRandom($idRandomPhrase) {
		$req = "SELECT * FROM `phrase` WHERE `idRandomPhrase` = '$idRandomPhrase';";
		$res = $this->db->query($req);
		$phrase = $res->fetchAll(PDO::FETCH_CLASS, "phrase");
		if ($phrase) {
			return $phrase[0];
		} else {
			return null;
		}
	}
	function insert($phrase){
		$idRandomPhrase = addslashes($phrase->getIdRandomPhrase());
		$intitulePhrase=addslashes($phrase->getIntitulePhrase());
    		
    	try {
			$req = "INSERT INTO `phrase` values('0','$idRandomPhrase','$intitulePhrase');";
			var_dump($req);
			$this->db->query($req);
			
			$req_id = "SELECT MAX(idPhrase) FROM `phrase`;";
			$res = $this->db->query($req_id);
			$id = $res->fetch()[0];
			return $id;
			
		} catch (PDOException $e) {
			return -1;
			
		}
	}

    function update($phrase)
    {
    	$idPhrase = $phrase->getIdPhrase();
		$idRandomPhrase = addslashes($phrase->getIdRandomPhrase());
		$intitulePhrase=addslashes($phrase->getIntitulePhrase());
		
		if ($this->getphraseById($getIdPhrase)) {
			
			$req = "UPDATE `phrase` SET
				idRandomPhrase='$idRandomPhrase',
				intitulePhrase='$intitulePhrase',
				WHERE `idPhrase` = $idPhrase;";
			$this->db->query($req);
			return true;
		} else {
			return false;
		}		
    }
    
    function delete($idPhrase)
    {
    	
    	$req = "DELETE FROM `phrase` WHERE `idPhrase`='$idPhrase'";
    	$this->db->query($req);
    }

    


    
}
?>
