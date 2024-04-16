<?php
$arr = [4, 7, 12, 6, 0, 3, 8, 15, 2, 9];
foreach ($arr as $value) {
  if ($value > 0 && $value < 10) {
    echo $value . " ";
  }
}
?>