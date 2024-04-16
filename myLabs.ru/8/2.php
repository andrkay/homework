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

        // Сортировка массива
        foreach ($numbers as &$row) {
            usort($row, 'cmp');
        }

        // Вывод отсортированного двумерного массива
        echo "Отсортированный двумерный массив:<br>";
        foreach ($numbers as $row) {
            foreach ($row as $element) {
                echo $element . " ";
            }
            echo "<br>";
        }
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Введите двумерный массив чисел (разделяйте элементы пробелами, строки - переводом строки):</label>
    <textarea name="input_array"></textarea>
    <button type="submit">Отправить</button>
</form>
