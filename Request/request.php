<?php
    include "../config/mysqlConnection.php";
    include "verification/verificationIdDefine.php";
    include "verification/verificationDatabaseDisponible.php";
    include "verification/verificationIdentifiantExist.php";
    include "getElements/size.php";

    if (verificationIdDefine() == true && verificationDatabaseDisponible($conn) == true){
        if (verificationIdentifiantExist($_GET['identifiant']) == true){
            echo getSize();
        }else{
            echo "false";
        }
    }
?>
