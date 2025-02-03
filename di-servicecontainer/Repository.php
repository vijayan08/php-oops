<?php
    
class Repository
{   
    public function __construct(private Database $database)
    {
    }                           
     
    public function getAll(): array
    {
        $pdo = $this->database->getConnection();
    
        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}