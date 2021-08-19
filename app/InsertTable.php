<?php

namespace App;

class InsertTable
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($name, $email, $body)
    {
        $sql = 'INSERT INTO messages(name,email,body) VALUES(:name,:email,:body)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':body' => $body
        ]);
        return $this->pdo->lastInsertId();
    }
}
