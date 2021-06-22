<?php 

include_once "app/Controller.php";
include_once "app/Login.php";

session_start();
if (isset($_POST['submit'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $object = new app\Login();
    $object->login($user_email, $user_password);
}



?>