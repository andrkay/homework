<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр юзеров</title>
</head>
<body>
    <?php
    // Создаем массив с пользователями
    $users = array(
        1 => "user1",
        2 => "user2",
        3 => "user3"
    );

    // Выводим ссылки на просмотр каждого юзера
    foreach ($users as $id => $name) {
        echo "<a href='show.php?id=$id'>$name</a><br>";
    }
    ?>
</body>
</html>
