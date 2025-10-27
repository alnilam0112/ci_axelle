<?php
namespace App; 

class Math
{
    // Addition
    public function addition(float $a, float $b): float
    {
        return $a + $b;
    }

    // Soustraction
    public function soustraction(float $a, float $b): float
    {
        return $a - $b;
    }

    // Multiplication
    public function multiplication(float $a, float $b): float
    {
        return $a * $b;
    }

    // Division
    public function division(float $a, float $b): float
    {
        if ($b == 0.0) {
            throw new \InvalidArgumentException("Division par zéro impossible.");
        }
        return $a / $b;
    }
}
