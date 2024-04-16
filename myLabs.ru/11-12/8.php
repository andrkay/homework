<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$dbname = 'RED!';    // имя базы данных

// Устанавливаем соединение с базой данных
$conn = new mysqli($host, $user, $pass, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выбираем данные из таблицы
$sql = "SELECT name, age, salary FROM users";
$result = $conn->query($sql);

// Если есть данные, выводим их в нужном формате
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['age'] . " years, <b>" . $row['salary'] . "$</b></p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Закрываем соединение
$conn->close();
?>

