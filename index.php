<?php

//ini_set('default_charset', 'windows-1251');

echo 'Введите Ваше имя: ' . PHP_EOL;
$name = mb_convert_case(fgets(STDIN), MB_CASE_TITLE);

echo 'Введите Вашу фамилию: ' . PHP_EOL;
$surname = mb_convert_case(fgets(STDIN), MB_CASE_TITLE);

echo 'Введите Ваше отчество: ' . PHP_EOL;
$patronymic = mb_convert_case(fgets(STDIN), MB_CASE_TITLE);

$fullName = $surname . ' ' . $name . ' ' . $patronymic;

echo "Ваше полное имя:  $fullName" . PHP_EOL;

$fio = mb_substr($surname, 0, 1) . mb_substr($name, 0, 1) . mb_substr($patronymic, 0, 1);
echo 'Ваше Ф.И.О.: ' . $fio . PHP_EOL;

$surnameAndInitials = $surname . ' ' . mb_substr($name, 0, 1) . '.' . mb_substr($patronymic, 0, 1) . '.';
echo 'Фамилия и инициалы: ' . $surnameAndInitials . PHP_EOL;

//ini_set('default_charset', 'UTF-8');
//echo 'Введите Вашу фамилию' . PHP_EOL;
//ini_set('default_charset', 'windows-1251');
//$surname = trim(fgets(STDIN));
//
//ini_set('default_charset', 'UTF-8');
//echo 'Введите Ваше отчество' . PHP_EOL;
//ini_set('default_charset', 'windows-1251');
//$patronymic = trim(fgets(STDIN));
//
//$fullName = $surname . ' ' . $name . ' ' . $patronymic;
//echo $fullName;





