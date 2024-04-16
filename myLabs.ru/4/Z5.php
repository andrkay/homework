<?php
$number = 123456;

$firstPart = (int)($number / 1000);
$secondPart = $number % 1000;

$sumFirst = (int)($firstPart / 100) + (int)(($firstPart % 100) / 10) + $firstPart % 10;
$sumSecond = (int)($secondPart / 100) + (int)(($secondPart % 100) / 10) + $secondPart % 10;

if ($sumFirst == $sumSecond) {
    echo "Сумма первых трех цифр равна сумме вторых трех цифр";
} else {
    echo "Сумма первых трех цифр не равна сумме вторых трех цифр";
}
?>