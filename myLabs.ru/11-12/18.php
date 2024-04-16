<!-- save.php -->
<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$dbname = 'RED!';    // имя базы данных

// Устанавливаем соединение с базой данных
$conn = new mysqli($host, $user, $pass, $dbname);

// Принимаем данные из формы edit.php
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обновляем данные о пользователе в базе данных
$sql = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Данные пользователя успешно обновлены";
} else {
    echo "Ошибка при обновлении данных пользователя: " . $conn->error;
}

// Закрываем соединение
$conn->close();
?>
