<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <form method="post">
        <label for="celsius">Введите температуру в градусах Цельсия:</label>
        <input type="number" name="celsius" id="celsius">
        <button type="submit" name="convert">Преобразовать</button>
    </form>

    <?php
    if(isset($_POST['convert'])){
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "Температура в градусах Фаренгейта: ".$fahrenheit."°F";
    }
    ?>
</body>
</html>