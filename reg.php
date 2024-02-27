<?php 
$name = filter_var(trim($_POST['name']));
$surname = filter_var(trim($_POST['surname']));
$login = filter_var(trim($_POST['login']));
$email = filter_var(trim($_POST['email']));
$pass = filter_var(trim($_POST['pass']));


$pass = md5($pass."test");

include('./db.php');

$mysql->query("INSERT INTO `users` (`name`, `surname`, `login`, `email`, `pass`, `role`) VALUES ('$name', '$surname', '$login', '$email', '$pass', 1);");
$mysql->close();
header('Location: /');
?>