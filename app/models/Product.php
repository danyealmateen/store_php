<?php

namespace App\Models;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $result = $this->db->getConnection()->query($sql);

        $products = [];

        if ($result->num_rows > 0) {
            echo 'Fetch data successfull';
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        } else {
            echo 'Could not fetch data';
        }
        return $products;
    }
    public function decreaseStock($productId, $quantity)
    {
        // Förbered en SQL-fråga för att minska lagerantalet
        $sql = "UPDATE products SET stock = stock - ? WHERE id = ? AND stock >= ? ";

        // Förbered ett uttalande
        $stmt = $this->db->getConnection()->prepare($sql);

        // Kontrollera om förberedelsen lyckades
        if ($stmt === false) {
            throw new \Exception("Problem med att förbereda SQL-frågan");
        }

        // Bind parametrar (säkerställer att värdena är korrekt hanterade)
        $stmt->bind_param("iii", $quantity, $productId, $quantity);

        // Exekvera frågan
        $stmt->execute();

        // Kontrollera om uppdateringen var framgångsrik
        if ($stmt->affected_rows === 0) {
            throw new \Exception("Produkten kunde inte uppdateras, kanske pga otillräckligt lagerantal ");
        }

        // Stäng förberedelsen
        $stmt->close();
    }
}
