<?php
require_once 'User.php';
session_start();


if (
    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])
    && $_POST['name'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== ''
) {
    $user = new User($_POST['name'], $_POST['password'], $_POST['email']);
    $user->saveData();
    $user->auth();
}
header('Location: /form.php');
