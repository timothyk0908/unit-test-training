<?php

final class Salary
{
    public static function calculateNetSalary(float $salary): float
    {
        return $salary * 55/100;
    }
}