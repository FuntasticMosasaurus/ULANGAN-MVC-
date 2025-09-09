<?php
include 'connect.php';

class User{
    private $db;

    public function __construct($conn){
        $this->db = $conn;
    }

    public function getAllUsers(){
        $result = $this->db->query("SELECT * FROM katalogfilm");
        return $result->fetch_all(MSQLY_ASSOC);
    }

    public function getUserById($id){
        $stmt = $this->db->prepare("SELECT * FROM katalogfilm WHERE id = ?");
        $stmt = bind_param("i", $id);
        $stmt->execute();
        $result = $stmt-get_result();
        return $result->fetch_assoc();
    }



}




?>