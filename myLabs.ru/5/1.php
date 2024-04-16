<?php
  $arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
  ];

  // увеличение зарплаты каждого работника на 10%
  foreach ($arr as $key => $value) {
    $arr[$key] += $value * 0.1;
  }

  // вывод обновленного массива
  var_dump($arr);
?>