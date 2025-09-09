<?php
include 'models/User.php';

class UserController{
    private $userModel;

    public function __construct($conn){
        $this->userModel = new User($conn);
    }

    public function index(){
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            $user = $this->userModel->getUserById($id);
            include 'views/user/detail.php';
        }
        else{
            $user = $this->userModel->getAllUsers();
            include 'views/users.php';
        }

    }
}









?>