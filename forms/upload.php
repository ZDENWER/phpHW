<pre>
<?php

if (empty($_POST['file_name'])||(empty($_FILES['content']['name']))) {
    header('location: http://localhost:8000/phpHW/forms/index.php');
} else {
    header('Content-Disposition: attachment; filename="'.basename($_POST['file_name']).'"');
}

echo '$_POST' . PHP_EOL;
var_dump($_POST) . PHP_EOL;

echo '$_FILES' . PHP_EOL;
var_dump($_FILES);
?>
</pre>
