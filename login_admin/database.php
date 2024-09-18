<?php
class Database {
    private $host = "localhost";
    private $db_name = "Bhoori_foundation";
    private $username = "root";  // Change as per your MySQL settings
    private $password = "";      // Change as per your MySQL settings
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>

