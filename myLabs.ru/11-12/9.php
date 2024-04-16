<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$dbname = 'RED!';    // имя базы данных

try {
    // Устанавливаем соединение с базой данных
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Устанавливаем режим ошибок PDO на исключения
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Выбираем данные из таблицы users
    $stmt = $conn->query('SELECT id, name, age, salary FROM users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Выводим таблицу
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>name</th>";
    echo "<th>age</th>";
    echo "<th>salary</th>";
    echo "</tr>";

    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['age'] . "</td>";
        echo "<td>" . $user['salary'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Закрываем соединение
$conn = null;
?>

