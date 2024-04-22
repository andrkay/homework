<?php

$number = 12345;

$number_str = (string) $number;

$first_char = $number_str[0];

if ($first_char == '1' || $first_char == '2' || $first_char == '3') {
    echo "Первая цифра числа - 1, 2 или 3";
} else {
    echo "Первая цифра числа не является 1, 2 или 3";
}
?>
