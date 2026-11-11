<?php

namespace App\Services;

class FactorialService
{
    function calculateFactorial($number)
    {
        if ($number < 0) {
            throw new \InvalidArgumentException("Factorial is not defined for negative numbers.");
        }

        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }
}
