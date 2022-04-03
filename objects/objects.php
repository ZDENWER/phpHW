<?php
declare(strict_types=1);
$date = date_create_from_format('j-F-Y', '24-February-2022');

var_dump($date);

date_modify($date, '+40 day 5 hours');

var_dump($date);

echo date(DATE_RSS);
