<?php
    require("config.php");
    class DAO {
        var $db;
        function __construct() {
            try {
                 $this->db = new PDO('mysql:host='.server.';dbname='.dbname,user,pwd, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            } catch (PDOException $e) {
                print "DAO.class.php error ! : " . $e->getMessage() . "<br/>";
                die();
            }
        }        
    
    }
    
?>