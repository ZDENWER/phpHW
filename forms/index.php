

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

echo '$_POST' . PHP_EOL;
var_dump($_POST) . PHP_EOL;

echo '$_FILES' . PHP_EOL;
var_dump($_FILES);

if (! empty($_FILES['name'])) {
    echo "Сохранен файл с именем $_POST[file_name]" . PHP_EOL;
}
?>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <label>
        <input name="file_name" type="text" placeholder="с каким именем сохранить файл на сервере" />
        <input name="content" type="file" />
    </label>
    <input type="submit" value="Отправить файл" />
</form>
</body>
</html>