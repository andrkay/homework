<?php
// Генерация случайного пароля
if ($_POST['action'] == 'generatePassword') {
    $length = $_POST['length'];
    $password = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);
    echo $password;
}

// Генерация случайного числа
if ($_POST['action'] == 'generateNumber') {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $number = rand($min, $max);
    echo $number;
}

// Остальные операции (сохранение данных, обработка...)
?>


