<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Страница с формой</title>
</head>
<body>
<form method="post">
    <textarea name="text"></textarea>
    <button type="submit" name="submit">Посчитать</button>
</form>

<?php
if(isset($_POST['submit'])) {
    $text = $_POST['text'];
    $words = str_word_count($text);
    $chars = strlen($text);
    echo "Количество слов: $words
";
    echo "Количество символов: $chars";
}
?>
</body>
</html>