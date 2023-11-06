<?php
class DB {
    public $conn;

    public function __construct() {
        
            $this->conn = new PDO('mysql:host=localhost;dbname=data', 'root', '');
        
    }

    public function insertUser($name, $email, $gender, $city) {
        $stmt = $this->conn->prepare("INSERT INTO tb_data (name, email, gender, city) VALUES (?, ?, ?, ? )");
        $stmt->execute([$name, $email, $gender, $city]);
    }

    public function getUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM tb_data");
        // $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>
