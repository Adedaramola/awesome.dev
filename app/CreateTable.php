<?php

namespace App;

class CreateTable
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTable()
    {
        $command = 'CREATE TABLE IF NOT EXISTS messages (
            id INTEGER PRIMARY KEY,
            name VARCHAR (255) NOT NULL,
            email VARCHAR (255) NOT NULL,
            body TEXT NOT NULL
        )';

        $this->pdo->exec($command);
    }
}
