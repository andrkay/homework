<?php
function get_day_of_week($date_str) {
    $timestamp = strtotime($date_str);
    $days = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
    $day_of_week = $days[date('w', $timestamp)];
    return $day_of_week;
}

$date = "2022-05-30";
echo get_day_of_week($date); // Выведет "Понедельник"
?>