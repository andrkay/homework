<?php
function factorial($n){
    if($n == 0){
        return 1;
    }
    else{
        return $n * factorial($n - 1);
    }
}

// Вызов функции для нахождения факториала числа 5
$result = factorial(5);
echo "Факториал числа 5: " . $result;
?>
s