<!DOCTYPE html>
<html>
<head>
  <title>Калькулятор слов и символов в тексте</title>
</head>
<body>

<form method="post">
  <textarea name="inputText" placeholder="Введите текст"></textarea>
  <button type="submit" name="submit">Посчитать</button>
</form>

<?php
if(isset($_POST['submit'])) {
  $inputText = $_POST['inputText'];
  $wordCount = str_word_count($inputText, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя'); // учитываем русские символы
  $charCount = mb_strlen($inputText, 'UTF-8'); // учитываем многобайтовые символы для поддержки Unicode

  echo 'Количество слов: ' . $wordCount . '<br>';
  echo 'Количество символов: ' . $charCount;
}
?>

</body>
</html>
