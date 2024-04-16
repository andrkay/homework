<?php
$number = 12345;

$firstDigit = (int) $number[0];
if ($firstDigit >= 1 && $firstDigit <= 3) {
    echo "Первая цифра числа - 1, 2 или 3";
} else {
    echo "Первая цифра числа не является 1, 2 или 3";
}
?>