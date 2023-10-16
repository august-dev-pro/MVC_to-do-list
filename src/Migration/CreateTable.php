<?php
namespace August\Migration;

use August\Helpers\Connection;



class CreateTable
{
    protected $connection;

    public function __construct()
    {
        $dbConnection = new Connection();
        $this->connection = $dbConnection->getConnection();
    }

    public function createTable()
    {
        $Task = " CREATE TABLE tasks (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR (255) NOT NULL,
            description TEXT NOT NULL,
            temps DATE NOT NULL,
            statut BOOLEAN
        )";

        try {

            $this->connection->exec($Task);

            echo "Tables créées avec succès!";
        } catch (\PDOException $e) {
            echo "Erreur lors de la création des tables : " . $e->getMessage();
        }
    }
}
