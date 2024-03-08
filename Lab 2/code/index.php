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


echo "\n----- TASK 4 -----\n";

$squareOfEight = 8 ** 2;
echo "Квадрат восьми: {$squareOfEight}\n";


echo "\n----- TASK 5 -----\n";

$myNum = 52;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "answer = {$answer}\n";


echo "\n----- TASK 6 -----\n";

$a = 10;
$b = 3;
$c = $a % $b;
echo "a % b = {$c}\n";

if ($a % $b == 0)
{
    echo "Делится\n";
    echo "a / b = ";
    echo $a / $b;
    echo "\n";
}
else
{
    echo "Делится с остатком\n";
    echo "Остаток: {$c}\n";
}

$st = pow(2, 10);
echo "2^10 = {$st}\n";
$squareRoot = sqrt(245);
echo "Квадратный корень из 245: {$squareRoot}\n";

$array = [4, 2, 5, 19, 13, 0, 10];
$sumOfSquares = 0;
foreach ($array as $value)
    $sumOfSquares += pow($value, 2);
$rootOfSumOfSquares = sqrt($sumOfSquares);
echo "Корень из суммы квадратов элементов массива array: {$rootOfSumOfSquares}\n";