<?php

namespace Evrimedont;

/**
 * Class CalculatorService
 */
class CalculatorService
{
    /**
     * @param float $var1
     * @param float $var2
     *
     * @return float
     */
    public function addition(float $var1, float $var2): float
    {
        return $var1 + $var2;
    }

    /**
     * @param float $var1
     * @param float $var2
     *
     * @return float
     */
    public function subtraction(float $var1, float $var2): float
    {
        return $var1 - $var2;
    }
}