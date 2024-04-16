<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);

$query1 = 'SELECT * FROM users';
$res1 = mysqli_query($link, $query1) or die(mysqli_error($link));
var_dump($res1);

$query2 = "SELECT name, age, salary FROM users";
$res2 = mysqli_query($link, $query2) or die(mysqli_error($link));
var_dump($res2);
?>