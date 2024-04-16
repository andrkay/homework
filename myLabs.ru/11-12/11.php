<?php
$host = 'localhost'; // имя хоста
$user_db = 'root';  // имя пользователя базы данных
$pass_db = '';  // пароль
$db_name = 'RED!';  // имя базы данных

// Устанавливаем соединение с базой данных
$conn = new mysqli($host, $user_db, $pass_db, $db_name);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получаем данные из таблицы
$sql = "SELECT name FROM users";
$result = $conn->query($sql);

// Если есть данные, выводим их в виде списка
if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row['name'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}

// Закрываем соединение
$conn->close();
?>
