<?php

// Функция для сравнения элементов массива
function cmp($a, $b) {
    return $a - $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $numbers = explode(' ', $input);

    // Преобразование строковых элементов в числа
    $numbers = array_map('intval', $numbers);

    // Сортировка массива
    usort($numbers, 'cmp');

    // Вывод отсортированного массива
    echo "Отсортированный массив: ";
    foreach ($numbers as $number) {
        echo $number . " ";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Введите массив чисел через пробел:</label>
    <input type="text" name="numbers">
    <button type="submit">Отправить</button>
</form>


