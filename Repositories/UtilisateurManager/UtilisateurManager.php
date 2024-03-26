<?php

namespace Repositories\UtilisateurManager;

use Models\DbConnexion\DbConnexion;
use Models\Utilisateur\Utilisateur;

class UtilisateurManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        // On récupére la fonctin getPdo de DbConnexion
        $this->pdo = $dbConnexion->getPDO();
    }

    public function login(string $email, string $password)
    {
        $hash = hash("whirlpool", $password);


        try {
            $stmt = $this->pdo->query("SELECT * FROM utilisateur WHERE email_utilisateur = '$email' AND password_utilisateur = '$hash' ");
        } catch (\PDOException $e) {
            var_dump($e);
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {

            $utilisateur = new Utilisateur($row);
        }

        if (isset($utilisateur)) {
            return $stmt->rowCount() == 1;
        }
    }
}
