<?php
declare(strict_types=1);
$day = 1;
$month = 12;
$year = 2022;

function dayInMonthFunc(int $month, int $year):int {
    return cal_days_in_month(0, $month, $year);
}
function workSchedule($day, $month, $year){
    $schedule = [];
    $dayOff = 2;
    $dayInMonth = dayInMonthFunc($month, $year);


    for ($i = $day; $i <= $dayInMonth; $i++){
        $a = strtotime($i . "-" . $month . "-" . $year);
        $b = getdate($a);
        $schedule[$i] = $b["weekday"];
        print_r($b["month"]);

        if ($schedule[$i] === "Saturday"||$schedule[$i] === "Sunday"||$dayOff < 2) {
            print_r("\033[32m $i $schedule[$i] \033[0m" . "  Выходных: $dayOff" . PHP_EOL);
            $dayOff++;
        } else {
            print_r("\033[31m $i $schedule[$i] \033[0m" . "  Выходных: $dayOff" . PHP_EOL);
            $dayOff = 0;
        }
    }
}

workSchedule($day, $month, $year);
