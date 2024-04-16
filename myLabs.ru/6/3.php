<?php
function sumOfDigits($number){
    $sum = 0;
    $digits = str_split($number);
    foreach ($digits as $digit) {
        $sum += $digit;
    }
    return $sum;
}

// Пример использования функции
$number = 12345;
$result = sumOfDigits($number);
echo "Сумма цифр числа $number: " . $result;
?>