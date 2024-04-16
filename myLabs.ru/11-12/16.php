<!-- new.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление нового пользователя</title>
</head>
<body>
    <h2>Добавить нового пользователя</h2>
    <form action="add_user.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" <?php if(isset($_POST['name'])) { echo "value='" . $_POST['name'] . "'"; } ?>><br><br>
        
        <label for="age">Возраст:</label>
        <input type="text" id="age" name="age" <?php if(isset($_POST['age'])) { echo "value='" . $_POST['age'] . "'"; } ?>><br><br>
        
        <label for="salary">Зарплата:</label>
        <input type="text" id="salary" name="salary" <?php if(isset($_POST['salary'])) { echo "value='" . $_POST['salary'] . "'"; } ?>><br><br>
        
        <input type="submit" value="Добавить">
    </form>
</body>
</html>
