<?php

namespace  Models\DbConnexion;

class DbConnexion
{
    private $host   = "localhost";
    private $login  = "to-do-list_brief";
    private $pass   = "to-do-list_brief";
    private $bdd    = "to-do-list_brief";
    private $pdo;

    function __construct()
    {
        try {
            $this->pdo = new \PDO("mysql:host={$this->host};dbname={$this->bdd};charset=utf8", $this->login, $this->pass);
        } catch (\PDOException $e) {
            die("Service indisponible");
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}
