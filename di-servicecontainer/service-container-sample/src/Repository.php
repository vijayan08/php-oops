<?php
//require 'Database.php';
class Repository
{   
   // public function __construct(private Database $database,private DateTime $datetime,private BookCalc $bookcalc)
   public function __construct(private Database $database,private BookCalc $bookcalc)
    {
        $this->database = $database;
       // $this->datetime = $datetime;
        //$this->bookcalc = $bookcalc;
    }                    
     
    public function getAll(): array
    {
        /*$database = new Database();
        $pdo = $database->getConnection();*/
        $pdo = $this->database->getConnection();
    
        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getToday() {
        return $this->datetime->format('l');
    }

    public function fetchbookdetails() {
        return $this->bookcalc->getBookDetails();
    }
}