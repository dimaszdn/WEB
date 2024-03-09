<?php

/**
 * 1. Блоки заданий разграничены подобным комментарием
 *          "----- <название блока> -----"
 * 2. Из-за того, что в названиях повторялись имена переменных,
 * я использовал несколько другие (возможно добавлял цифру в конце
 * по типу array1; или где то сокращал arr; или что-то ещё)
 *
 * 3. Если в задании имя переменной было написано в подобном виде: my_num,
 * то я записывал в стиле CamelCase (исключение первое задание)
 */

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
    echo "Делится. ";
    echo "a / b = ";
    echo $a / $b;
    echo "\n";
}
else
{
    echo "Делится с остатком. ";
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
echo round($squareRoot1) . "\n";
echo "Округление до десятых корня из 379: ";
echo round($squareRoot1, 1) . "\n";
echo "Округление до сотых корня из 379: ";
echo round($squareRoot1, 2) . "\n";

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
echo "Модуль разности x и y: {$absXY}\n";

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


echo "\n----- ФУНКЦИИ №1-----\n";
function printStringReturnNumber(string $stringNumber) : int
{
    echo "Строка: {$stringNumber}\n";
    return intval($stringNumber);
}
$myNum1 = printStringReturnNumber("456");
echo "Число: {$myNum1}\n";


echo "\n----- ФУНКЦИИ №2-----\n";

function increaseEnthusiasm(string $str) : string
{
    return $str . "!";
}
echo "Результат применения increaseEnthusiasm(): ";
echo increaseEnthusiasm("Что-то не весело как-то");
echo "\n";

function repeatThreeTimes(string $str) : string
{
    return $str.$str.$str;
}
echo "Результат применения repeatThreeTimes(): ";
echo repeatThreeTimes("Андрюха");
echo "\n";

echo "Результат применения increaseEnthusiasm(repeatThreeTimes()): ";
echo increaseEnthusiasm(repeatThreeTimes("Gut"));
echo "\n";

function cut(string $str, int $desiredLen = 10) : string
{
    $tempStr = "";
    for ($i = 0; $i < $desiredLen; ++$i)
    {
        if ($i >= strlen($str))
            break;
        $tempStr .= $str[$i];
    }
    return $tempStr;
}
echo "Обрезанная строка: ";
echo cut("abcdefg", 1);
echo "\n";

function recursiveOutputArray(array $array, int $size): void
{
    if ($size <= 0)
        return;
    else
    {
        recursiveOutputArray($array, $size - 1);
        echo $array[$size - 1] . " ";
    }
}
echo "Рекурсивный вывод массива: ";
recursiveOutputArray($arrayOfRandomNumbers, count($arrayOfRandomNumbers));
echo "\n";

function sumOfDigitsWithCondition(int $numb): int
{
    while (array_sum(str_split($numb)) > 9)
        $numb = array_sum(str_split($numb));
    return array_sum(str_split($numb));
}
echo "Результат фукнции sumOfDigitsWithCondition(): ";
echo sumOfDigitsWithCondition(4156798516999);
echo "\n";


echo "\n----- Массивы -----\n";

$arrayX = [];
$sizeArrayX = 20;
$arrayX[0] = 'x';
for ($i = 1; $i < $sizeArrayX; ++$i)
    $arrayX[$i] = $arrayX[$i - 1] . 'x';

function arrayFill($value, $count) : array
{
    $array = [];
    for ($i = 0; $i < $count; ++$i)
        $array[$i] = $value;
    return $array;
}
$arrayOfOnlyX = arrayFill('x', 5);
echo "Тест функции arrayFill():\n";
var_dump($arrayOfOnlyX);
echo "\n";

$matrix = [
    [1, 2, 3],
    [4, 5],
    [6]
];
$sumOfMatrixElements = 0;
for ($i = 0; $i < count($matrix); ++$i)
    $sumOfMatrixElements += array_sum($matrix[$i]);
echo "Сумма элементов матрицы: {$sumOfMatrixElements}\n\n";

echo "Массив заполненный с помощью циклов:\n";
$sizeX = 3;
$sizeY = 3;
$array33i = [];
$k = 1;
for ($y = 0; $y < $sizeY; ++$y)
{
    for ($x = 0; $x < $sizeX; ++$x)
    {
        $array33i[$y][$x] = $k;
        ++$k;
    }
}
var_dump($array33i);
echo "\n";

$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo "Значение переменной result = {$result}\n\n";

$user = [
    'name' => ['Александр', 'Лев'],
    'surname' => ['Пушкин', 'Толстой'],
    'patronymic' => ['Сергеевич', 'Николаевич']
];
foreach($user['surname'] as $key => $surname)
    echo $surname . ' ' . $user['name'][$key] . ' ' . $user['patronymic'][$key] . "\n";
echo "\n";

$date = ['year' => '23', 'month' => '03', 'day' => '09'];
echo "Дата: ";
echo $date['year'] . '.' . $date['month'] . '.' . $date['day'] . "\n\n";

$arr1 = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов: ";
echo count($arr1);
echo "\n";

echo "Последний элемент: {$arr1[count($arr1) - 1]} \n";
echo "Предпоследний элемент: {$arr1[count($arr1) - 2]} \n";


echo "\n----- Конструкция if-else -----\n";

function checkSum(int $a, int $b) : bool
{
    if ($a + $b > 10)
        return true;
    else
        return false;
}

function checkForEquality(int $a, int $b) : bool
{
    if ($a === $b)
        return true;
    else
        return false;
}

if (!$myNum)
    echo 'верно';

$age = 99;
if ($age < 10 || $age > 99)
    echo "Значение переменной age меньше 10 или больше 99\n";
else
{
    $sumDigits = array_sum(str_split($age));
    if ($sumDigits <= 9)
        echo "Сумма цифр однозначна\n";
    else
        echo "Сумма цифр двузначна\n";
}

$arr2 = [1, 2, 3];
if (count($arr2) == 3)
{
    echo "Сумма элементов массива состоящего из 3-ех элементов: ";
    echo array_sum($arr2);
    echo "\n";
}


echo "\n----- Циклы -----\n";
/*
 * Немного схитрил
 * Ранее по работе создавался массив arrayX, который нам и
 * требуется распечатать фактически.
*/
foreach ($arrayX as $value)
    echo $value . "\n";
echo "\n";


echo "\n----- Комбинация функций -----\n";

$array3 = [1, 2, 3, 4, 5, 6];
$arithmeticMean = array_sum($array3) / count($array3);
echo "Среднее арифметическое: {$arithmeticMean}\n";

echo "Сумма чисел от 1 до 100: ";
echo array_sum(range(1, 100));
echo "\n";

echo "Массив из корней квадратных:\n";
$arrayOfRoots = array_map('sqrt', $array3);
var_dump($arrayOfRoots);
echo "\n";

echo "Массив с ключами-английский алфавит:\n";
$arrayWithKeysAbc = array_combine(range('a', 'z'), range(1, 26));
var_dump($arrayWithKeysAbc);
echo "\n";

$digitString = '1234567890';
$sumPair = array_sum(str_split($digitString, 2));
echo "12+34+56+78+90 = {$sumPair}\n";