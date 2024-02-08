<?php

namespace App\Models;

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'store_products';

    private $connection;

    public function __construct()
    {
        // Skapar en anslutning
        $this->connection = new \mysqli($this->host, $this->user, $this->pass, $this->dbname);

        // Kontrollerar anslutningen
        if ($this->connection->connect_error) {
            die("Anslutningsfel: " . $this->connection->connect_error);
        } else {
            echo 'Ansluten till databasen!';
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

    // Glöm inte att stänga anslutningen när den inte längre behövs
    public function closeConnection()
    {
        $this->connection->close();
    }
}
