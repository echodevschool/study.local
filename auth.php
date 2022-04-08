<?php
session_start();

$_SESSION['is_auth'] = false;

if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] !== '' && $_POST['password'] !== ''){
 $email = $_POST['email'];
 $password = $_POST['password'];
 $user = new User('name','email','password');{
     unset($user['name']);
    }



 if ($user->auth())
 {
 return true;
 }
 else {
     return false;
 }

// $data = file_get_contents('USERS.txt');
// $data = explode("\n", $data);
//    foreach ($data as $item) {
//        $logoPass = explode('-',$item);
//        $checkEmail = trim($logoPass[1]);
//        $checkPassword = trim($logoPass[2]);
//        if ($checkEmail == $email && $checkPassword){
//            $_SESSION['is_auth'] = true;
//            break;
//        }
//
// }
}

header('Location: /login.php');