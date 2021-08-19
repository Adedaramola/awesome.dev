<?php

namespace App;

class Database
{
    public $PATH_TO_SQLITE_DB = __DIR__ . '/../database/database.sqlite';

    private $pdo;

    public function connect()
    {
        if ($this->pdo == null) {
            try {
                $this->pdo = new \PDO("sqlite:" . $this->PATH_TO_SQLITE_DB);
            } catch (\PDOException $e) {
                $e->getMessage();
            }
        }
        return $this->pdo;
    }
}
