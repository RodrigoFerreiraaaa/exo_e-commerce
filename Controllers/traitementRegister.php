<?php
var_dump($_POST);
if (isset($_POST['adresseMail']) && isset($_POST['motDePasse']) && isset($_POST['confirmMotDePasse']) && isset($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['adresseMail']) && !empty($_POST['motDePasse']) && !empty($_POST['confirmMotDePasse']) && !empty($_POST['prenom']) && !empty($_POST['nom'])) {
    $adresseMail = htmlentities($_POST['adresseMail']);
    $motDePasse = htmlentities($_POST['motDePasse']);
    $confirmMotDePasse = htmlentities($_POST['confirmMotDePasse']);
    $prenom = htmlentities($_POST['prenom']);
    $nom = htmlentities($_POST['nom']);
}
