<?php

    function verificationIdDefine(){
        if (isset($_GET['identifiant'])){
            
            return true;
        }else{
            echo 'Erreur, information manquante dans le formulaire !';
        }
    }

?>