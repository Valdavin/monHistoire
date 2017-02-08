<?php
require_once("associe.class.php");
require_once("DAO.class.php");

class associeDAO {
	private $db;
	function __construct() {
		$dao = new DAO();
		$this->db = $dao->db;
	}

	function getAll() {
		$req = "SELECT * FROM `associe`;";
		$res = $this->db->query($req);
		$associes = $res->fetchAll(PDO::FETCH_NUM);
		$comptable = [];
        foreach ($associes as $associe) {
            $comptable[] = $associe[0];
        }
		return $comptable;		
	}

	function getassocieByIdPhrase($idphrase) {
		$req = "SELECT * FROM `associe` WHERE `idphrase` = '$idphrase';";		
		$res = $this->db->query($req);
		$associe = $res->fetchAll(PDO::FETCH_CLASS, "associe");
		if ($associe) {
			return $associe[0];
		} else {
			return null;
		}
	}

	function getassocieByIdChoix($idchoix) {
		$req = "SELECT * FROM `associe` WHERE `idchoix` = '$idchoix';";
		$res = $this->db->query($req);
		$associe = $res->fetchAll(PDO::FETCH_CLASS, "associe");

		if ($associe) {
			return $associe[0];
		} else {
			return null;
		}
	}

	function insert($associe){


		$idPhrase = addslashes($associe->getIdPhrase());
		$idChoix=addslashes($associe->getIdChoix());
    		
    	try {
			$req = "INSERT INTO `associe` values('$idPhrase','$idChoix');";
			$res = $this->db->query($req);
			var_dump($req);
			if ($res) {
				return true;
			} else {
				return false;
			}
			
			
		} catch (PDOException $e) {
			return false;
			
		}
	}

    function updateIdChoix($associe,$newIdChoix)
    {
    	$idPhrase = addslashes($associe->getIdPhrase());
		$idChoix=	addslashes($associe->getIdChoix());

		
		if ($this->getassocieById($getIdassocie)) {
			
			$req = "UPDATE `associe` SET
				idChoix='$newIdChoix'
				WHERE `idPhrase` = $idPhrase;";
			$this->db->query($req);
			return true;
		} else {
			return false;
		}		
    }

    function updateIdPhrase($associe,$newIdPhrase)
    {
    	$idPhrase = addslashes($associe->getIdPhrase());
		$idChoix=	addslashes($associe->getIdChoix());

		
		if ($this->getassocieById($getIdassocie)) {
			
			$req = "UPDATE `associe` SET
				idPhrase='$newIdPhrase'
				WHERE `idChoix` = $idChoix;";
			$this->db->query($req);
			return true;
		} else {
			return false;
		}		
    }
    
    function deleteFromPhrase($idPhrase)
    {
    	
    	$req = "DELETE FROM `associe` WHERE `idPhrase`='$idPhrase'";
    	$this->db->query($req);
    }

    function deleteFromChoix($idChoix)
    {
    	
    	$req = "DELETE FROM `associe` WHERE `idChoix`='$idChoix'";
    	$this->db->query($req);
    }

    
}
?>
