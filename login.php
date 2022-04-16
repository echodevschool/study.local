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
if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] === true) {
    echo '<h1>Авторизация прошла успешно</h1>';
}
?>

<form action="/auth.php" method="post" name="form">
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

