<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task2a</title>
    <style>
        .form-container {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form method="post">
        <label for="text">Введите текст</label><br>
        <textarea rows="3" name="text"></textarea><br>
        <input type="submit" value="Count">
    </form>
    <?php
        $text = "";
        if (isset($_POST['text']))
            $text = $_POST['text'];
        $matches = array();
        $count = preg_match_all('/[a-zа-я0-9.]+/ui', $text, $matches);
        $countSymbols = mb_strlen($text);
        echo "<p>Слов в тексте: $count </p>";
        echo "<p>Количество символов в тексте: $countSymbols</p>"
    ?>
</div>
</body>
</html>