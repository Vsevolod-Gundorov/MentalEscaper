<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli("localhost:3306", 'root', 'root', 'for_website_mental_support');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");

$users = $result->fetch_assoc();
if($users == 0)
{
  echo '<script>
  alert( "Неправильно введён логин или пароль" );
  </script>';
  echo "<script>self.location='/';</script>";
  exit();
}
else
{
  setcookie('user' , $users['login'], time() + 1800, "/");
}

$mysql -> close();

header('Location: /advices.php')
   ?>
