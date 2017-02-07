<?php
require_once("choix.class.php");
require_once("DAO.class.php");

class choixDAO {
	private $db;
	function __construct() {
		$dao = new DAO();
		$this->db = $dao->db;
	}

	function getAll() {
		$req = "SELECT * FROM `choix` ORDER BY `idchoix`;";
		$res = $this->db->query($req);
		$choixs = $res->fetchAll(PDO::FETCH_NUM);
		$comptable = [];
        foreach ($choixs as $choix) {
            $comptable[] = $choix[0];
        }
		return $comptable;		
	}

	function getchoixById($idchoix) {
		$req = "SELECT * FROM `choix` WHERE `idchoix` = '$idchoix';";
		$res = $this->db->query($req);
		//var_dump($res->fetchAll());
		$choix = $res->fetchAll(PDO::FETCH_CLASS, "choix", array('idChoix','idRandomChoix','intituleChoix','envoisVers'));
		if ($choix) {
			return $choix[0];
		} else {
			return null;
		}
	}

	function getchoixByIdRandom($idRandomchoix) {
		$req = "SELECT * FROM `choix` WHERE `idRandomchoix` = '$idRandomchoix';";
		$res = $this->db->query($req);
		$choix = $res->fetchAll(PDO::FETCH_CLASS, "choix", array('idChoix','idRandomChoix','intituleChoix','envoisVers'));
		if ($choix) {
			return $choix[0];
		} else {
			return null;
		}
	}
	function insert($choix){


		$idRandomchoix = addslashes($choix->getIdRandomchoix());
		$intitulechoix=addslashes($choix->getIntitulechoix());
		$envoisVers=addslashes($choix->getEnvoisVers());
    		
    	try {
			$req = "INSERT INTO `choix` values('0','$idRandomchoix','$intitulechoix','$envoisVers');";
			var_dump($req);
			$this->db->query($req);
			
			$req_id = "SELECT MAX(idchoix) FROM `choix`;";
			$res = $this->db->query($req_id);
			$id = $res->fetch()[0];
			return $id;
			
		} catch (PDOException $e) {
			return -1;
			
		}
	}

    function update($choix)
    {
    	$idchoix = $choix->getIdchoix();
		$idRandomchoix = addslashes($choix->getIdRandomchoix());
		$intitulechoix=addslashes($choix->getIntitulechoix());
		$envoisVers=addslashes($choix->getEnvoisVers());
		
		if ($this->getchoixById($getIdchoix)) {
			
			$req = "UPDATE `choix` SET
				idRandomchoix='$idRandomchoix',
				intitulechoix='$intitulechoix',
				envoisVers='$envoisVers'
				WHERE `idchoix` = $idchoix;";
			$this->db->query($req);
			return true;
		} else {
			return false;
		}		
    }
    
    function delete($idchoix)
    {
    	
    	$req = "DELETE FROM `choix` WHERE `idchoix`='$idchoix'";
    	$this->db->query($req);
    }

    
}
?>
