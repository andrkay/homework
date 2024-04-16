<?PHP
function seconds_to_days($seconds) {
    $days = $seconds / (60 * 60 * 24);
    return $days;
}

$seconds = 864000;  // 10 сутки = 864000 секунд
echo seconds_to_days($seconds);  // Выведет 10
?>