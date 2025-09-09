<?php
include 'connect.php';
include 'controllers/UserController.php';

$controller = new UserController($conn);
$controller->index();

?>