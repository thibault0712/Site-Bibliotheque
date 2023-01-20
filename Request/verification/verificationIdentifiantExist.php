<?php
    function verificationIdentifiantExist($identifiant){
        include "../config/mysqlConnection.php";
        // Préparez une requête SQL de sélection pour vérifier si un utilisateur avec un nom d'utilisateur spécifique existe dans la table "Bibliotheque"
        $sql = "SELECT * FROM Bibliotheque WHERE Identifiant=?";
        $stmt = mysqli_prepare($conn, $sql);

        // On rentre le paramètre identifiant dans la requête sql
        mysqli_stmt_bind_param($stmt, "s", $identifiant);

        // Exécutez la requête préparée
        mysqli_stmt_execute($stmt);

        // Obtention du résultat
        $result = mysqli_stmt_get_result($stmt);

        // On conte le nombre de ligne retrouvé
        if (mysqli_num_rows($result) > 0) {
            return true;
       } else {
            return false;
        }

        // On ferme la connection
        mysqli_stmt_close($stmt);
    }
?>
