<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quadratic Equation Solver</title>
</head>
<body>
    <h1>Quadratic Equation Solver</h1>
    <form method="post">
        <label for="a">Введите коэффициент a:</label>
        <input type="number" name="a" id="a" required><br><br>

        <label for="b">Введите коэффициент b:</label>
        <input type="number" name="b" id="b" required><br><br>

        <label for="c">Введите коэффициент c:</label>
        <input type="number" name="c" id="c" required><br><br>

        <button type="submit">ОТВЕТ</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b**2 - 4*$a*$c;

        if ($discriminant > 0) {
            $x1 = (-$b + sqrt($discriminant)) / (2*$a);
            $x2 = (-$b - sqrt($discriminant)) / (2*$a);
            echo "Корнями уравнения являются: x1 = $x1, x2 = $x2"; // пример a=5 b=-6 c=1
        } elseif ($discriminant == 0) {
            $x = -$b / (2*$a);
            echo "Уравнение имеет двойной корень: x = $x";
        } else {
            echo "Уравнение не имеет двойной корень";
        }
    }
    ?>
</body>
</html>