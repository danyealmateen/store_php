<?php

namespace App;

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'store_products';

    public function connect()
    {
        $connection = new \mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}
