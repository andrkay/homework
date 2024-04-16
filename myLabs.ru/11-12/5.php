<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT * FROM users';
$res = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($res);

$query_delete1 = "DELETE FROM users WHERE id=7";
mysqli_query($link, $query_delete1) or die(mysqli_error($link));

$query_delete2 = "DELETE FROM users WHERE age=23";
mysqli_query($link, $query_delete2) or die(mysqli_error($link));

$query_delete3 = "DELETE FROM users";
mysqli_query($link, $query_delete3) or die(mysqli_error($link));
?>
