<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	
	$query = 'SELECT * FROM users';
	$res = mysqli_query($link, $query) or die(mysqli_error($link));
	var_dump($res);


  // Получение массива всех работников
  for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
  var_dump($data); // здесь будет массив с результатом
  
  // Получение первого работника
  $firstEmployee = $data[0];
  echo "Имя первого работника: " . $firstEmployee['name'] . "<br>";
  
  // Получение второго работника
  $secondEmployee = $data[1];
  echo "Имя второго работника: " . $secondEmployee['name'] . ", Возраст: " . $secondEmployee['age'] . "<br>";
  
  // Получение третьего работника
  $thirdEmployee = $data[2];
  echo "Имя третьего работника: " . $thirdEmployee['name'] . ", Возраст: " . $thirdEmployee['age'] . ", Зарплата: " . $thirdEmployee['salary'] . "<br>";
?>