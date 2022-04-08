<?php
session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Тег FORM</title>
</head>
<body>
<?php
//$admin = 'Admin';

include_once 'User.php';

if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] === true) {
    if (isset($_SESSION['name'])) {
        echo "<h3>" . $_SESSION['name'] . ", поздравляем, вы зарегистрировались! Ваш пароль: " . $_SESSION['password'] . " ответ вы получите на почту: " . $_SESSION['email'] . "</h3>";
        unset($_SESSION['is_auth']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        if (User::isAdmin()) {
            echo 'you are Admin';
        }
    }
}
?>

<form action="/include.php" method="post" name="form">
  <!-- Поле ввода имени -->
  <input name="name" type="text" placeholder="Ваше имя" />
  <br>
  <!-- Поле ввода почты  -->
  <input name="email" type="text" placeholder="Ваша почта" />
  <br>
  <!-- Поле ввода пароля -->
   <input name="password" type="password" size="30" placeholder="Ваш пароль" />
  <br>
  <!-- Кнопка с надписью «Отправить», которая запускает обработчик формы -->
  <input type="submit" value="Отправить" />
</form>

</body>
</html>

