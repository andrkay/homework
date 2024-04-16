<?php
function getCurrentDayOfWeek() {
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    $currentDay = date('w');
    return $days[$currentDay];
}

// Пример использования функции
$currentDayOfWeek = getCurrentDayOfWeek();
echo "Сегодня " . $currentDayOfWeek;
?>