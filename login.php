<?php

use Models\DbConnexion\DbConnexion;
use Repositories\UtilisateurManager\UtilisateurManager;

include("autoload.php");
session_start();





if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $utilisateur = (json_decode($data, true));


    $dbConnexion = new DbConnexion();
    $utilisateurManager = new UtilisateurManager($dbConnexion);

    if ($utilisateurManager->login($utilisateur["email"], $utilisateur["password"])) {
        echo "success";
    } else {
        echo "didn't work";
    }
}
