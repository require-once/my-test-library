<?php

declare(strict_types=1);

namespace DmitriyZhukov\MyTestLibrary;

use Exception;

class Calculator
{
    public function sum(float $a, float $b) : float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * @throws Exception
     */
    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new Exception('Division by zero');
        }
        return $a / $b;
    }
}
