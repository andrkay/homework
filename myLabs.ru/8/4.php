<?php

// Функция для сортировки отрицательных элементов в начало
function sortByNegative($a, $b) {
    if ($a < 0 && $b < 0) {
        return 0;
    } elseif ($a < 0) {
        return -1;
    } elseif ($b < 0) {
        return 1;
    } else {
        return 0;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_array = $_POST['input_array'];

    // Разбиваем строку на отдельные элементы массива
    $numbers = array_map('intval', explode(' ', $input_array));

    // Сортируем массив с учетом правила
    usort($numbers, 'sortByNegative');

    // Вывод преобразованного массива
    echo "Преобразованный массив: " . implode(' ', $numbers);
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Введите массив чисел (разделяйте элементы пробелами):</label>
    <input type="text" name="input_array">
    <button type="submit">Отправить</button>
</form>
