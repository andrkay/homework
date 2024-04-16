<!DOCTYPE html>
<html>
<head>
  <title>Калькулятор дней до дня рождения</title>
</head>
<body>

<form method="post">
  <input type="text" name="birthdate" placeholder="Введите дату рождения в формате 'дд.мм.гггг'">
  <button type="submit" name="calculate">Рассчитать</button>
</form>

<?php
if(isset($_POST['calculate'])) {
  $birthdate = $_POST['birthdate'];
  $today = new DateTime();
  $nextBirthday = new DateTime($today->format('Y') . '-' . substr($birthdate, 3, 2) . '-' . substr($birthdate, 0, 2));

  if ($nextBirthday < $today) {
    $nextBirthday->modify('+1 year');
  }
  
  $interval = $nextBirthday->diff($today);
  $daysToBirthday = $interval->days;

  echo 'До дня рождения осталось ' . $daysToBirthday . ' дней';
}
?>

</body>
</html>