<?php
    function verificationIdentifiantExist($identifiant){
        include "../config/mysqlConnection.php";
        // Préparez une requête SQL de sélection pour vérifier si un utilisateur avec un nom d'utilisateur spécifique existe dans la table "users"
        $sql = "SELECT * FROM Bibliotheque WHERE Identifiant=?";
        $stmt = mysqli_prepare($conn, $sql);

        // Liens une variable à la requête préparée en tant que paramètre
        mysqli_stmt_bind_param($stmt, "s", $identifiant);

        // Exécutez la requête préparée
        mysqli_stmt_execute($stmt);

        // Obtenez le résultat de la requête
        $result = mysqli_stmt_get_result($stmt);

        // Vérifiez combien de lignes ont été retournées
        if (mysqli_num_rows($result) > 0) {
            return true;
       } else {
            return false;
        }

        // N'oubliez pas de fermer le déclencheur lorsque vous avez terminé
        mysqli_stmt_close($stmt);
    }
?>
