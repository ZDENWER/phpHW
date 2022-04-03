<?php

$numbers = [];

//if (! empty($POST))
if (isset($_POST['send'])) {
    $numbers = $_POST['numbers'];

    if (! empty($_POST['sort'])) {
        if ($_POST['sort'] === 'asc') {
            sort($numbers);
        } else {
            rsort($numbers);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            echo 'GET' . PHP_EOL;
            var_dump($_GET) . PHP_EOL;
            echo 'POST'. PHP_EOL;
            var_dump($_POST). PHP_EOL;
            echo 'array numbers'. PHP_EOL;
            var_dump($numbers). PHP_EOL;
        ?>
    </pre>

<!--    <a href="/phpHW/SB/?sort=asc">Отсортировать</a>-->
    <form action="/phpHW/SB/" method="post">
        <label>
            Введите текст: <input type="number" name="numbers[]"><br>
            Введите текст: <input type="number" name="numbers[]"><br>
            Введите текст: <input type="number" name="numbers[]"><br>

            <select name="sort">
                <option selected value="">Не сортировать</option>
                <option value="asc">По возрастанию</option>
                <option value="desc">По убыванию</option>
            </select><br>
        </label>
        <input type="submit" value="Отправить" name="send">
    </form>
</body>
</html>

