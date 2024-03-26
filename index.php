<?php

use Models\DbConnexion\DbConnexion;
use Repositories\CategorieManager\CategorieManager;
use Repositories\TacheManager\TacheManager;

include('autoload.php');

$dbConnexion = new DbConnexion();



$tacheManager = new TacheManager($dbConnexion);


$taches = $tacheManager->allTachesAndCategories();


$categorieManager =   new CategorieManager($dbConnexion);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
</head>

<body>

    <body>
        <main class="main w-full bg-black min-h-screen pl-12 py-8 w-1/2 px-auto flex flex-col justify-center">
            <?php
           
            include("./Views/Register.php");
            include("./Views/Addtache.php");
            include("./Views/Alltaches.php");
            ?>
        </main>
        <?php include("./Views/footer.php") ?>

    </body>
    <script src="https://cdn.tailwindcss.com"></script>

</html>