<!DOCTYPE html>
<html>
<head>
    <title>Divisors of a Number</title>
</head>
<body>
    <form method="post">
        <label for="number">Введите номер:</label>
        <input type="number" name="number" id="number">
        <button type="submit" name="calculate">Вычислять делители</button>
        <ul>
            <?php
            if(isset($_POST['calculate'])){
                $number = $_POST['number'];
                for ($i = 1; $i <= $number; $i++) {
                    if ($number % $i == 0) {
                        echo "<li>".$i."</li>";
                    }
                }
            }
            ?>
        </ul>
    </form>
</body>
</html>
