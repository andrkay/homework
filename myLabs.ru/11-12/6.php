<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT * FROM users';
$res = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($res);
?>