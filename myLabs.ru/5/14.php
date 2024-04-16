<?php
$array = [-2, 4, 7, 11, 5, 0, 9];

$sumSquares = 0;
foreach ($array as $value) {
  $sumSquares += $value * $value;
}

echo "Сумма квадратов элементов массива: $sumSquares";
?>