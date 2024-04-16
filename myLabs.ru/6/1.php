<?php
function findDivisors($number){
    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}

// Пример использования функции
$number = 12;
$result = findDivisors($number);
print_r($result);
?>