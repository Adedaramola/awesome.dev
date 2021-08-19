<?php

namespace App;

class Database
{

    private $pdo;

    public function connect()
    {
        $databasePath = __DIR__ . '/../database/database.sqlite';

        if ($this->pdo == null) {
            try {
                $this->pdo = new \PDO("sqlite:" . $databasePath);
            } catch (\PDOException $e) {
                $e->getMessage();
            }
        }
        return $this->pdo;
    }
}
