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

// Проверяем, был ли передан параметр name в GET-запросе
if (isset($_GET['name'])) {
    // Подготавливаем SQL-запрос для поиска id пользователя по имени
    $name = $_GET['name'];
    $sql = "SELECT id FROM users WHERE name='$name'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userId = $row['id'];

        // Подготавливаем SQL-запрос для удаления пользователя по id
        $deleteSql = "DELETE FROM users WHERE id=$userId";

        // Выполняем запрос на удаление
        if ($conn->query($deleteSql) === TRUE) {
            echo "Пользователь $name удален из базы данных";
        } else {
            echo "Ошибка при удалении пользователя: " . $conn->error;
        }
    } else {
        echo "Пользователь с именем $name не найден";
    }
} else {
    echo "Параметр name не передан";
}

// Закрываем соединение
$conn->close();
?>


