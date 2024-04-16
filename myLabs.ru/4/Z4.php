<?php
$number = 456;

$firstDigit = (int)($number / 100);
$secondDigit = (int)(($number % 100) / 10);
$thirdDigit = $number % 10;

$sum = $firstDigit + $secondDigit + $thirdDigit;

echo "Сумма цифр трехзначного числа: " . $sum;
?>