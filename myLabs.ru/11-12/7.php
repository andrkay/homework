<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'RED!';      // имя базы данных

// Устанавливаем соединение с базой данных
$conn = new mysqli($host, $user, $pass, $name);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выбираем данные из таблицы users
$sql = "SELECT id, name, age, salary FROM users";
$result = $conn->query($sql);

// Если есть данные, то выводим таблицу
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>name</th>";
    echo "<th>age</th>";
    echo "<th>salary</th>";
    echo "</tr";

    // выводим данные из каждой строки
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Закрываем соединение
$conn->close();
?>
