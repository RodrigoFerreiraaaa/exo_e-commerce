<?php

namespace Repositories\CategorieManager;


use Models\DbConnexion\DbConnexion;
use Models\Categorie\Categorie;

class CategorieManager
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allCategories()
    {
        $categories = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM categorie");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $categories[] = new Categorie($row);
            }
        } catch (\PDOException $e) {
            return $categories;
        }
        return $categories;
    }

    public function insertCategorie(Categorie $objet)
    {
        $name = $objet->getNameCategorie();
        try {
            $stmt = $this->pdo->prepare("INSERT INTO categorie (name) VALUES (?)");
            $stmt->execute([$name]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
