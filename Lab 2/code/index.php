<?php

echo "----- ДОСТУП ПО ССЫЛКЕ -----";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " from the KFS";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.\n";


echo "\n----- ЧИСЛА -----\n";

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


echo "\n----- УМНОЖЕНИЕ И ДЕЛЕНИЕ -----\n";

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "На один язык в среднем ушло {$daysPerLanguage}\n";


echo "\n----- СТЕПЕНЬ -----\n";

$squareOfEight = 8 ** 2;
echo "Квадрат восьми: {$squareOfEight}\n";


echo "\n----- ОПЕРАТОРЫ ПРИСВОЕНИЯ -----\n";

$myNum = 52;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "answer = {$answer}\n";


echo "\n----- МАТЕМАТИЧЕСКИЕ ФУНКЦИИ -----\n";
//работа с %
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

echo "\n";

//работа с sqrt и pow
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

echo "\n";

//работа с функциями округления
$squareRoot1 = sqrt(379);
echo "Округление до целых корня из 379: ";
echo round($squareRoot1);
echo "\n";

echo "Округление до десятых корня из 379: ";
echo round($squareRoot1, 1);
echo "\n";

echo "Округление до сотых корня из 379: ";
echo round($squareRoot1, 2);
echo "\n";

$squareRoot2 = sqrt(587);
$floorValue = floor($squareRoot2);
$ceilValue = ceil($squareRoot2);
$floorAndCeil = ["floor" => $floorValue, "ceil" => $ceilValue];
var_dump($floorAndCeil);

echo "\n";

//работа с min и max
$array1 = [4, -2, 5, 19, -130, 0, 10];
$min = min($array1);
$max = max($array1);
echo "min = {$min}\n";
echo "max = {$max}\n";

echo "\n";

//работа с рандомом
$randValue = rand(1, 100);
echo "Рандомное число от 1 до 100: {$randValue}\n";

echo "Массив из 10 случайных чисел:\n";
$arrayOfRandomNumbers = [];
for ($i = 0; $i < 10; ++$i)
    $arrayOfRandomNumbers[$i] = rand(1, 1000);
var_dump($arrayOfRandomNumbers);

echo "\n";

//работа с модулем
$x = 4;
$y = 10;
$absXY = abs($x - $y);
echo "Модуль разности a и b: {$absXY}\n";

$mas = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < 6; ++$i)
    $mas[$i] = abs($mas[$i]);
echo "Массив из абсолютных величин:\n";
var_dump($mas);

echo "\n";

//общее
$inputNumb = 30;
$dividers = [];
$index = 0;
for ($divider = 1; $divider < $inputNumb + 1; ++$divider)
{
    if ($inputNumb % $divider == 0)
    {
        $dividers[$index] = $divider;
        ++$index;
    }
}
echo "Все делители числа {$inputNumb}:\n";
var_dump($dividers);

echo "\n";

$array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumOfFirstNumbers = 0;
$count = 0;
for ($i = 0; $i < 10; ++$i)
{
    $sumOfFirstNumbers += $array2[$i];
    ++$count;
    if ($sumOfFirstNumbers > 10)
    {
        echo "Нужно сложить первых элементов: {$count} \n";
        break;
    }
}