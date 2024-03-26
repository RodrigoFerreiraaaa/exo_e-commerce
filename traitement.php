<?php

use Models\DbConnexion\DbConnexion;
use Models\Tache\Tache;
use Repositories\TacheManager\TacheManager;


include('autoloader.php');


if (isset($_POST["newProduct"])) {


    $obj = new Tache($_POST);
    $cx = new DbConnexion();
    $manager = new TacheManager($cx);

    if ($manager->insertTache($obj)) {
        header("Location: index.php");
        echo "sucess";
    } else {
        echo "pb";
    }
}
