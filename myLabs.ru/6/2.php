<?php
function findCommonDivisors($number1, $number2){
    $divisors1 = findDivisors($number1);
    $divisors2 = findDivisors($number2);
    $commonDivisors = array_intersect($divisors1, $divisors2);
    return $commonDivisors;
}

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
$number1 = 12;
$number2 = 18;
$result = findCommonDivisors($number1, $number2);
print_r($result);
?>