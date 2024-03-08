<?php

echo "----- TASK 1 -----";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " from the KFS";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.\n";


echo "\n----- TASK 2 -----\n";

$number1 = 52;
echo "{$number1}\n";

$number2 = 64;
echo "{$number2}\n";

$floatNumber = 3.14159;
echo "{$floatNumber}\n";

echo 6 + 6;
echo "\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "Разница между расходами: ";
echo $lastMonth - $thisMonth;
echo "\n";


echo "\n----- TASK 3 -----\n";

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "На один язык в среднем ушло {$daysPerLanguage}\n";

