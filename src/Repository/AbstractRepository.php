<?php
namespace August\Repository;

use August\Helpers\Connection;

class AbstractRepository
{
    protected $connection;

    public function __construct()
    {
        $dbConnection = new Connection();

        $this->connection = $dbConnection->getConnection();
    }
}

?>
