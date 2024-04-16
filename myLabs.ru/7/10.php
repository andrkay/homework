<!DOCTYPE html>
<html>
<head>
  <title>Получение дня недели по выбранной дате</title>
</head>
<body>

<form method="post">
  <select name="day">
    <?php
    for ($i = 1; $i <= 31; $i++) {
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select>
  <select name="month">
    <?php
    $months = [
      'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
      'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
    ];
    foreach ($months as $key => $month) {
      echo "<option value='".($key+1)."'>$month</option>";
    }
    ?>
  </select>
  <select name="year">
    <?php
    for ($i = 1990; $i <= 2025; $i++) {
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select>
  <button type="submit" name="submit">Получить день недели</button>
</form>

<?php
if(isset($_POST['submit'])) {
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year = $_POST['year'];

  $dateString = "$year-$month-$day";
  $timestamp = strtotime($dateString);
  $dayOfWeek = date("l", $timestamp); // Получение полного названия дня недели

  echo "Выбранная дата - $day.$month.$year, это был день недели: $dayOfWeek";
}
?>

</body>
</html>