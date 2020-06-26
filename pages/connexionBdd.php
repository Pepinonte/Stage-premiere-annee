<?php
    $serveur = "localhost";
    $user = "root";
    $pass = "";

    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=contact", $user, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e){
        echo 'Echec :' .$e->getMessage();
    }