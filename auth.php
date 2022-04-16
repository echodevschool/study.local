<?php
session_start();
require_once 'User.php';
if (
    isset($_POST['email']) && isset($_POST['password'])
    && $_POST['email'] !== '' && $_POST['password'] !== ''
){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User($email, $password);
    $user->auth();
}

header('Location: /login.php');