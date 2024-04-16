<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <form method="post">
        <label for="number">Введите номер:</label>
        <input type="number" name="number" id="number">
        <button type="submit" name="calculate">Вычислить факториал</button>
    </form>

    <?php
    if(isset($_POST['calculate'])){
        $number = $_POST['number'];
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        echo "Факториал от  ".$number." равен: ".$factorial;
    }
    ?>
</body>
</html>
