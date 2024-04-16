<?PHP
function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$number = 312214;
if (is_prime($number)) {
    echo $number . " - простое число";
} else {
    echo $number . " - не простое число";
}
?>