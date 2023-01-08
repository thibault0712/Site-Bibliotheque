<?php

    $host = '192.168.0.179:3306'; // Hôte de la base de données
    $user = 'Users'; // Nom d'utilisateur de la base de données
    $password = 'Stjoyrhup@29'; // Mot de passe de la base de données
    $database = 'phpmyadmin'; // Nom de la base de données

    // Création de la connexion
    $conn = mysqli_connect($host, $user, $password, $database);
?>