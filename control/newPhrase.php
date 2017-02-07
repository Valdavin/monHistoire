<?php 
    include_once('../model/include.php');
    $phraseDAO = new phraseDAO();
    $choixDAO = new choixDAO();
    $associeDAO = new associeDAO();


    function newPhrase($idRandChoixOrigine,$intitulePhrase,$intituleChoix1,$intituleChoix2,$intituleChoix3,$intituleChoix4) {
        $toutBon = true
        $randPhrase = rand(1,1000000);
        while ($phraseDAO->getPhraseByIdRandom($randPhrase)) {
            $randPhrase = rand(1,1000000);
        }
        $phrase = new phrase('0',$randPhrase,$intitulePhrase);
        $idPhrase = $phraseDAO->insert($phrase);

        if($idPhrase && $toutBon) {

            $arrayChoix = array($intituleChoix1,$intituleChoix2,$intituleChoix3,$intituleChoix4);
            foreach ($arrayChoix as $choixCur) {

                $randchoix = rand(1,1000000);

                while ($choixDAO->getchoixByIdRandom($randchoix)) {
                    $randchoix = rand(1,1000000);
                }

                $choix = new choix('0',$randchoix,$choixCur,'0');
                $idChoix = $choixDAO->insert($choix);

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
                    $phraseDAO->delete($idPhrase);
                }
            }


        } else {
            $toutBon = false;
            echo "Quelque chôse a mal tourné : phraseDAO Phrase";
        }

        if ($toutBon) {
            // TODO : rejoindre le choix d'origie a la novelle phrase
            $choixOrigine = 
            $choixOrigine = $choixDAO->getchoixByIdRandom($idRandChoixOrigine);

            $choixOrigine->set


        }
    }

 ?>