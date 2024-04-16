<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pythagorean Triple Checker</title>
</head>
<body>
    <h1>Pythagorean Triple Checker</h1>
    <form method="post">
        <label for="num1">Введите номер 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Введите номер 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Введите номер 3:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <button type="submit">ОТВЕТ</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $nums = [$num1, $num2, $num3];
        sort($nums);

        if ($nums[2]**2 === $nums[0]**2 + $nums[1]**2) {
            echo "Числа образуют пифагорейскую тройку.";
        } else {
            echo "Числа не образуют пифагорейскую тройку.";
        }
    }
    ?>
</body>
</html>
