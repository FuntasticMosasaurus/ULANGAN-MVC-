<?php
include 'connect.php';

class User{
    private $db;

    public function __construct($conn){
        $this->db = $conn;
    }

    public function getAllUsers(){
        $result = $this->db->query("SELECT * FROM movies");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById($id){
        $stmt = $this->db->prepare("SELECT * FROM  movies WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt-get_result();
        return $result->fetch_assoc();
    }



}




?>