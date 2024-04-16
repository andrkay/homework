<!DOCTYPE html>
<html>
<head>
  <title>Подсчет процентного содержания символов в тексте</title>
</head>
<body>

<form method="post">
  <textarea name="inputText" placeholder="Введите текст"></textarea>
  <button type="submit" name="submit">Посчитать</button>
</form>

<?php
if(isset($_POST['submit'])) {
  $inputText = $_POST['inputText'];
  $charCount = mb_strlen($inputText, 'UTF-8'); // общее количество символов в тексте
  $charFrequency = []; // массив для хранения частоты встречаемости каждого символа

  // подсчитываем частоту встречаемости каждого символа
  for ($i = 0; $i < $charCount; $i++) {
    $char = mb_substr($inputText, $i, 1, 'UTF-8');
    if (isset($charFrequency[$char])) {
      $charFrequency[$char]++;
    } else {
      $charFrequency[$char] = 1;
    }
  }

  // выводим процентное содержание каждого символа
  foreach ($charFrequency as $char => $count) {
    $percentage = ($count / $charCount) * 100;
    echo "Символ '$char' встречается в тексте с процентным содержанием: " . number_format($percentage, 2) . "%<br>";
  }
}
?>

</body>
</html>