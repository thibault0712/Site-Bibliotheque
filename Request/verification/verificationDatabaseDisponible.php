<?php
function verificationDatabaseDisponible($conn){
        if (!$conn) {
            die("Oups, une erreur c'est produite. La base de donnée est innacessible");
        }else{
            return true;
        }
    }
?>