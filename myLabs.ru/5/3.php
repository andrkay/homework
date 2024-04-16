<?php
  $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];

  $sumKeys = array_sum(array_keys($arr)); // сумма ключей
  $sumValues = array_sum($arr); // сумма значений

  $result = $sumKeys / $sumValues; // результат

  echo $result;
?>