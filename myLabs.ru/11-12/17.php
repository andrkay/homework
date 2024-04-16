<!-- edit.php -->
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

if (isset($_GET['edit'])) {
    $userId = $_GET['edit'];

    // Получаем данные о пользователе из базы данных
    $sql = "SELECT * FROM users WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Редактирование пользователя: " . $row['name'] . "</h2>";
        echo "<form action='save.php' method='post'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<label for='name'>Имя:</label>";
        echo "<input type='text' name='name' value='" . $row['name'] . "'><br><br>";
        echo "<label for='age'>Возраст:</label>";
        echo "<input type='text' name='age' value='" . $row['age'] . "'><br><br>";
        echo "<label for='salary'>Зарплата:</label>";
        echo "<input type='text' name='salary' value='" . $row['salary'] . "'><br><br>";
        echo "<input type='submit' value='Сохранить изменения'>";
        echo "</form>";
    } else {
        echo "Пользователь с ID $userId не найден";
    }
} else {
    echo "ID пользователя не задан";
}

// Закрываем соединение
$conn->close();
?>
