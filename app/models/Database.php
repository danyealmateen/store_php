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










// $connection = mysqli_connect('localhost', 'root', '', 'store_products');
// if (!$connection) {
//     die("Databasanslutning misslyckades:" . mysqli_connect_error());
// }

// $query = "SELECT * FROM products";
// $result = mysqli_query($connection, $query);

// if ($result) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "Product:" . $row["name"] . " - " . "Price:" . $row["price"] . "$" . "<br>";
//     }
// } else {
//     echo "Frågan misslyckades: " . mysqli_error($connection);
// }

// mysqli_close($connection);
