<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список пользователей</title>
</head>
<body>
    <h2>Список пользователей</h2>
    <ul>
        <?php
        for ($i=1; $i<=3; $i++) {
            echo "<li>user$i <a href='edit.php?edit=$i'>edit</a></li>";
        }
        ?>
    </ul>
</body>
</html>
