<?php
include "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "\..\config");
$dotenv->load();
/**
 * Class for database interactions
 */

class Db
{
    private $servername;
    private $username;
    private $password;
    private $db;
    private $charset;

    public function connect() 
    {
        $this ->servername = $_SERVER["DB_HOST"];
        $this ->username = $_SERVER["DB_USER"];
        $this ->password = $_SERVER["DB_PASSWORD"];
        $this ->db = $_SERVER["DB_DATABASE"];
        $this ->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->db.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this ->username, $this ->password);
            $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        
        } catch(PDOException $e) {
            echo "Connection failed: " . $e ->getMessage(); 
        }
    }
}