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

// Проверяем, был ли передан параметр del в GET-запросе
if (isset($_GET['del'])) {
    // Получаем id пользователя для удаления
    $idToDelete = $_GET['del'];

    // Подготавливаем SQL-запрос для удаления пользователя по id
    $deleteSql = "DELETE FROM users WHERE id = $idToDelete";

    // Выполняем запрос на удаление
    if ($conn->query($deleteSql) === TRUE) {
        echo "Пользователь c id=$idToDelete удален из базы данных";
    } else {
        echo "Ошибка при удалении пользователя: " . $conn->error;
    }
}

// Получаем данные из таблицы
$sql = "SELECT id, name, age, salary FROM users";
$result = $conn->query($sql);

// Если есть данные, выводим их в виде таблицы
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>name</th>";
    echo "<th>age</th>";
    echo "<th>salary</th>";
    echo "<th>delete</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "<td><a href='?del=" . $row['id'] . "'>удалить</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Закрываем соединение
$conn->close();
?>
