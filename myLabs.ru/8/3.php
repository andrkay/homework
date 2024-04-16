<?php

// Функция для сравнения элементов массива
function cmp($a, $b) {
    return $a - $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = array();

    // Получаем ввод пользователя в виде двумерного массива
    if(isset($_POST['input_array'])) {
        $input_array = $_POST['input_array'];

        // Разбиваем строки на отдельные элементы массива
        $rows = explode("\n", $input_array);

        // Преобразуем строки в числовые массивы
        foreach ($rows as $row) {
            $numbers[] = array_map('intval', explode(' ', $row));
        }

        // Собираем все числа в одномерный массив
        $flatNumbers = array_merge(...$numbers);

        // Подсчет количества вхождений каждой цифры
        $countedNumbers = array_count_values($flatNumbers);

        // Находим цифру, которая встречается чаще всего
        $mostCommonNumber = array_search(max($countedNumbers), $countedNumbers);

        // Вывод наиболее часто встречающейся цифры
        echo "Наиболее часто встречающаяся цифра: " . $mostCommonNumber;
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Введите массив чисел (разделяйте элементы пробелами, строки - переводом строки):</label>
    <textarea name="input_array"></textarea>
    <button type="submit">Отправить</button>
</form>
