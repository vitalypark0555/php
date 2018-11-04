<?php


class Calculation
{
    public static function calculate($firstNumber, $secondNumber, $operation)
    {
        $result = 0;
        switch ($operation) {
            case 'add':
                $result = self::add($firstNumber, $secondNumber);
                break;
            case 'subtract':
                $result = self::subtract($firstNumber, $secondNumber);
                break;
            case 'multiply':
                $result = self::multiply($firstNumber, $secondNumber);
                break;
            case 'divide':
                $result = self::divide($firstNumber, $secondNumber);
                break;
        }
        return $result;
    }

    private static function add($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }

    private static function subtract($firstNumber, $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }

    private static function multiply($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }

    private static function divide($firstNumber, $secondNumber)
    {
        return $firstNumber / $secondNumber;
    }
}