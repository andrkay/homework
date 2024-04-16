<?php
$host = 'localhost'; // имя хоста
$user_db = 'root';    // имя пользователя базы данных
$pass_db = '';        // пароль
$db_name = 'RED!';    // имя базы данных

// Устанавливаем соединение с базой данных
$conn = new mysqli($host, $user_db, $pass_db, $db_name);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Предположим, что у нас есть переменная $userId, содержащая id пользователя, информацию о котором мы хотим отобразить
$userId = 1;

// Получаем данные о пользователе из базы данных
$sql = "SELECT name, age, salary FROM users WHERE id = $userId";
$result = $conn->query($sql);

// Если есть данные о пользователе, отображаем их в требуемом формате
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div>";
    echo "<p>имя: <span class='name'>" . $row['name'] . "</span></p>";
    echo "<p>возраст: <span class='age'>" . $row['age'] . "</span>, зарплата: <span class='salary'>" . $row['salary'] . "$</span></p>";
    echo "</div>";
} else {
    echo "Пользователь с ID $userId не найден";
}

// Закрываем соединение
$conn->close();
?>

