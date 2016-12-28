<?php
$start = time();

function isPerfect($number)
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0)
            $sum += $i;
    }
    return $sum == $number;
}

$c = 4; // количество совершенных чисел

printf("First %d perfect numbers:" . PHP_EOL, $c);
$i = 1; // число с которого начинаем
while ($c > 0) {
    if (isPerfect($i)) {
        echo $i . PHP_EOL;
        $c--;
    }
    $i++;
}
$time = time() - $start;
printf("Duration: %d seconds." . PHP_EOL, $time);