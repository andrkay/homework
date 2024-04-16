<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Common Divisors</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number1" placeholder="Введите первое число">
        <input type="number" name="number2" placeholder="Введите второе число">
        <button type="submit">Найдите общие делители</button>
    </form>

    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $divisors = [];

            for ($i = 1; $i <= min($number1, $number2); $i++) {
                if ($number1 % $i === 0 && $number2 % $i === 0) {
                    $divisors[] = $i;
                }
            }

            echo 'Общие делители: ' . implode(', ', $divisors);
        }
        ?>
    </p>
</body>
</html>