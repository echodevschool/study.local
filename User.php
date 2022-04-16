<?php
session_start();

class User
{
    // свойства - любая переменная внутри класса
// методы - любая функция внутри класса
// свойста и методы могут быть публичными public, приватными private и защищенными protected

    private $name;
    private $password;
    private $email;
    protected $title;

    // конструктор
    public function  __construct($email, $password)
    {
        $this->password = $password;
        $this->email = $email;
    }

    public function saveData()
    {
        file_put_contents('users.txt', $this->name.'-'.$this->email.' - '. $this->password.PHP_EOL , FILE_APPEND);
    }

    public function auth()
    {
        $_SESSION['is_auth'] = false;
        if ($this->name == 'Admin') {
            $_SESSION['is_admin'] = true;
        } else {
            $_SESSION['is_admin'] = false;
        }

        $_SESSION['email'] = $this->email;
        $_SESSION['password'] = $this->password;
        $data = file_get_contents('users.txt');
        $data = explode("\n", $data);
        foreach ($data as $item) {
            $logoPass = explode('-',$item);
            $checkEmail = trim($logoPass[1]);
            $checkPassword = trim($logoPass[2]);


            if ($checkEmail == $this->email && $checkPassword == $this->password){
                $_SESSION['is_auth'] = true;
                break;
            }

        }

        return $_SESSION['is_auth'];
    }

    // геттеры
    public function getName()
    {
      return  $this->name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }

    //сеттеры
    public function setName($name)
    {
        $this->name = $name;
    }

    //статический метод
    public static function isAdmin()
    {
        return $_SESSION['is_admin'];

    }

}
