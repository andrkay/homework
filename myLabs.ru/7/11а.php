<!DOCTYPE html>
<html>
<head>
    <title>Определение знака зодиака</title>
</head>
<body>
    <h2>Определение знака зодиака по дате рождения</h2>
    
    <form method="post">
        <label for="birthdate">Введите вашу дату рождения: </label>
        <input type="date" id="birthdate" name="birthdate">
        <button type="submit">Показать знак зодиака</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST["birthdate"];
        $zodiac_sign = "";
        
        if ($birthdate) {
            $signs = array(
                "Овен" => array("03-21", "04-19"),
                "Телец" => array("04-20", "05-20"),
                "Близнецы" => array("05-21", "06-20"),
                "Рак" => array("06-21", "07-22"),
                "Лев" => array("07-23", "08-22"),
                "Дева" => array("08-23", "09-22"),
                "Весы" => array("09-23", "10-22"),
                "Скорпион" => array("10-23", "11-21"),
                "Стрелец" => array("11-22", "12-21"),
                "Козерог" => array("12-22", "01-19"),
                "Водолей" => array("01-20", "02-18"),
                "Рыбы" => array("02-19", "03-20")
            );
            
            $month_day = date("m-d", strtotime($birthdate));
            foreach ($signs as $sign => $dates) {
                if ($month_day >= $dates[0] && $month_day <= $dates[1]) {
                    $zodiac_sign = $sign;
                    break;
                }
            }
            
            if ($zodiac_sign) {
                echo "<h3>Ваш знак зодиака: $zodiac_sign</h3>";
            } else {
                echo "<p>Не удалось определить знак зодиака по введенной дате рождения.</p>";
            }
        } else {
            echo "<p>Пожалуйста, введите дату рождения.</p>";
        }
    }
    ?>
</body>
</html>
