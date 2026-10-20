<?php

declare(strict_types=1);

namespace DmitriyZhukov\MyTestLibrary;

use Exception;

class Calculator
{
    private function format_answer(float $result): string
    {
        return number_format($result, 2, '.', '');
    }
    public function sum(float $a, float $b) : float
    {
        return (float) $this->format_answer($a + $b);
    }

    public function subtract(float $a, float $b): float
    {
        return (float) $this->format_answer($a - $b);
    }

    public function multiply(float $a, float $b): float
    {
        return (float) $this->format_answer($a * $b);
    }

    /**
     * @throws Exception
     */
    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new Exception('Division by zero');
        }
        return (float) $this->format_answer($a / $b);
    }
}
