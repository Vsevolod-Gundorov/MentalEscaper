<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli("localhost:3306", 'root', 'root', 'for_website_mental_support');
if($login != null && $pass != null && $email != null)
{
$mysql -> query("INSERT INTO `users` (`login`,`password`,`email`)
VALUES('$login', '$pass', '$email')");
}
else
{
  echo 'Введите корректные данные';
}

$mysql -> close();
header('Location: /index.php');
?>
