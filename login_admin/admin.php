<?php
class Admin {
    private $conn;
    private $table_name = "admins";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Login admin
    public function login($email, $password) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['password_hash'];

            // Verify the password
            if ($this->verifyPassword($password, $hashed_password)) {
                return true; // Password correct
            }
        }
        return false; // Incorrect email or password
    }

    // Password hashing using SHA-256
    public function hashPassword($password) {
        return hash('sha256', $password);
    }

    // Verify password using SHA-256
    public function verifyPassword($password, $hashed_password) {
        return hash('sha256', $password) === $hashed_password;
    }
}
?>
