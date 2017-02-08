<?php 
    include_once('../model/include.php');


    
    //alldelete();

    //Création premier choix
    function creatFirstChoix() {
        $choixDAO = new choixDAO();
        $randchoix = rand(1,1000000); 
        while ($choixDAO->getchoixByIdRandom($randchoix)) {
            $randchoix = rand(1,1000000);
        }
        $choix = new choix('0',$randchoix,"CHoix originel",'1');
        $idChoixO = $choixDAO->insert($choix);
        $c = $choixDAO->getchoixById($idChoixO);
        
        return $c->getIdRandomChoix();
    }
    
    $idRandChoixO = creatFirstChoix();

    newphrase($idRandChoixO,"phrase1","Choix 1","Choix 2","Choix 3","Choix 4");


    function newPhrase($idRandChoixOrigine,$intitulePhrase,$intituleChoix1,$intituleChoix2,$intituleChoix3,$intituleChoix4) {
        $phraseDAO = new phraseDAO();
        $choixDAO = new choixDAO();
        $associeDAO = new associeDAO();

        $toutBon = true;

        // On trouve un random libre pour la phrase
        $randPhrase = rand(1,1000000);
        while ($phraseDAO->getPhraseByIdRandom($randPhrase)) {
            $randPhrase = rand(1,1000000);
        }

        //On créé l'objet phrase avec les bon params.
        $phrase = new phrase('0',$randPhrase,$intitulePhrase);

        //On insert la phrase dans la DDB tout en sauvegardant l'id.
        $idPhrase = $phraseDAO->insert($phrase);

        if($idPhrase && $toutBon) {

            //Lise des intitulés de choix.
            $arrayChoix = array($intituleChoix1,$intituleChoix2,$intituleChoix3,$intituleChoix4);

            //Liste des ids des choix après création, permet de mieux les supprimer
            $arrayIdChoix = array();

            // Pour tout les choix (4 normalement)
            foreach ($arrayChoix as $choixCur) {

                //On trouve un random pas encore pris
                $randchoix = rand(1,1000000); 
                while ($choixDAO->getchoixByIdRandom($randchoix)) {
                    $randchoix = rand(1,1000000);
                }

                //On créé l'objet choix avec les bon params
                $choix = new choix('0',$randchoix,$choixCur,'1');

                //On insert le choix dans la DDB tout en gardant l'ID
                $idChoix = $choixDAO->insert($choix);

                //On sauvegarde l'id dans la liste.
                array_push($arrayIdChoix, $idChoix);

                //Si le choix a bien été créé et que tout est bon, on lie le choix à la phrase.
                if($idChoix && $toutBon) {
                    $associe = new associe($idPhrase,$idChoix);

                    if($associeDAO->insert($associe) && $toutBon) {

                    } else {
                        $toutBon = false;
                        echo "Quelque chôse a mal tourné : phraseDAO Associe";
                        $phraseDAO->delete($idPhrase);
                        
                    }

                } else {
                    $toutBon = false;
                    echo "Quelque chôse a mal tourné : phraseDAO Choix";
                }
            }

           if(@ toutBon == false) { 
                //Si qqch a mal tourné on suprime la phrase et les choix potentiellement créés
                $phraseDAO->delete($idPhrase);
                foreach ($arrayIdChoix as $idChoixDel) {
                    $choixDAO->delete($idChoixDel);
                }

            }


        } else {
            $toutBon = false;
            echo "Quelque chôse a mal tourné : phraseDAO Phrase";
        }

        if ($toutBon) {

            // Si tout est bon on lie le choix originel a cette nouvelle phrase.
            $ChoixOrigine = $choixDAO->getchoixByIdRandom($idRandChoixOrigine);
            $ChoixOrigine->setEnvoisVers($idPhrase);
            $choixDAO->update($ChoixOrigine);


        }
    }

    function allDelete() {
        $dao = new DAO();
        $db = $dao->db;
        $db->exec("DELETE FROM associe;");
        $db->exec("DELETE FROM phrase;");
        $db->exec("DELETE FROM choix;");
    }


 ?>