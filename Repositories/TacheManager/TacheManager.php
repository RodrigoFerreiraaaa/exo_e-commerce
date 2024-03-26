<?php

namespace Repositories\TacheManager;

use Models\DbConnexion\DbConnexion;
use Models\Tache\Tache;

class TacheManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allTachesAndCategories()
    {
        $taches = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM tache INNER JOIN category ON tache.id_category = category.id");

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $taches[] = new Tache($row);
            }
        } catch (\PDOException $e) {
            return $taches;
        }

        return $taches;
    }

    public function insertTache(Tache $objet)
    {
        $name = $objet->getName();
        $id_category = $objet->getId_categorie();

        try {
            $stmt = $this->pdo->prepare("INSERT INTO tache VALUES(NULL, ?, ?, ?, ?)");
            $stmt->execute([$name, $id_category]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            var_dump($e);
        }
    }
}
