<?php
    function getSize($identifiant){
        include "../config/mysqlConnection.php";
        $sql = 'SELECT * FROM `Bibliotheque` WHERE `Identifiant` == $identifiant';
        $result = mysql_query($sql, $conn) or die(mysql_error());
        $total = mysql_num_rows($result);
        if($total == 1) {
          return $row['Size'];
        }else{
          return false;
        }
    }
?>
