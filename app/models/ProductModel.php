<?php
require_once 'db.php';
require_once 'Products.php';

class ProductModel
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = (new Database())->connect();
    }
}
