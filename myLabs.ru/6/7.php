<?PHP
function is_leap_year($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

$year = 2024;
if (is_leap_year($year)) {
    echo $year . " - високосный год";
} else {
    echo $year . " - не високосный год";
}
?>