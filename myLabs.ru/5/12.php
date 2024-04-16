<?php
$array = [2, 4, 6, 8, 5, 10];

$hasFive = false;
foreach ($array as $value) {
  if ($value === 5) {
    $hasFive = true;
    break;
  }
}

if ($hasFive) {
  echo "Массив содержит элемент со значением 5";
} else {
  echo "Массив не содержит элемента со значением 5";
}
?>