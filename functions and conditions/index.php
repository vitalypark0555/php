<?php

/**
 * 1 пункт
 */
define('FIRST_CONSTANT', 50);
define('SECOND_CONSTANT', 500);
$a = FIRST_CONSTANT;
$b = SECOND_CONSTANT;

if ($a >= 0 && $b >= 0) {
    echo $a + $b;
}

if ($a < 0 && $b < 0) {
    echo $a - $b;
}

if ($a >= 0 && $b < 0 || $a < 0 && $b >= 0) {
    echo $a * $b;
}

echo '</br>';

/**
 * 2 пункт
 */
echo $a > $b ? $a : $b;

echo '</br>';

/**
 * 3 пункт
 */
$a = 4;

switch ($a) {
    case 0:
        echo 0;
        echo '</br>';
    case 1:
        echo 1;
        echo '</br>';
    case 2:
        echo 2;
        echo '</br>';
    case 3:
        echo 3;
        echo '</br>';
    case 4:
        echo 4;
        echo '</br>';
    case 5:
        echo 5;
        echo '</br>';
    case 6:
        echo 6;
        echo '</br>';
    case 7:
        echo 7;
        echo '</br>';
    case 8:
        echo 8;
        echo '</br>';
    case 9:
        echo 9;
        echo '</br>';
    default:
        break;
}

/**
 * 4 пункт
 * @param $a
 * @param $b
 * @return mixed
 */
function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

/**
 * 5 пункт
 * @param $arg1
 * @param $arg2
 * @param $operation
 * @return bool|float|int|mixed
 */
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "add":
            return add($arg1, $arg2);
            break;
        case "subtract":
            return subtract($arg1, $arg2);
            break;
        case "multiply":
            return multiply($arg1, $arg2);
            break;
        case "divide":
            return divide($arg1, $arg2);
            break;
        default:
            break;
    }
    return false;
}

/**
 * 6 пункт
 * @param $val
 * @param $pow
 * @return float|int
 */
function power($val, $pow)
{
    $result = 1;
    if ($pow >= 0) {
        if ($pow == 0)
            return $result;
        else
            $result = $val * power($val, $pow - 1);
    } else {
        $result = 1 / power($val, -$pow);
    }
    return $result;
}

echo power(3, 3);
echo '</br>';
echo power(3, -3);
echo '</br>';

/**
 * 7 пункт
 * @param $arg1
 * @param $arg2
 * @return mixed
 */
function maxNumber($arg1, $arg2)
{
    return $arg1 > $arg2 ? $arg1 : $arg2;
}

function minNumber($arg1, $arg2)
{
    return $arg1 < $arg2 ? $arg1 : $arg2;
}

$a = 40;
$b = 300;

$c = $a * $b;


if ($c > 100 && $c < 1000)
    echo subtract($a, $b);
if ($c > 1000)
    echo $c / maxNumber($a, $b);

