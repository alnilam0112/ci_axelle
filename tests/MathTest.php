<?php
use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    private Math $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAddition(): void
    {
        $this->assertEquals(8, $this->math->addition(5, 3));
        $this->assertEquals(-2, $this->math->addition(-5, 3));
        $this->assertEquals(0, $this->math->addition(0, 8));
    }

    public function testSoustraction(): void
    {
        $this->assertEquals(2, $this->math->soustraction(5, 3));
        $this->assertEquals(-8, $this->math->soustraction(-5, 3));
        $this->assertEquals(0, $this->math->soustraction(0, 0,));
    }

    public function testMultiplication(): void
    {
        $this->assertEquals(15, $this->math->multiplication(5, 3));
        $this->assertEquals(-15, $this->math->multiplication(-5, 3));
        $this->assertEquals(0, $this->math->multiplication(0, 10));
    }

    public function testDivision(): void
    {
        $this->assertEquals(2, $this->math->division(6, 3));
        $this->assertEquals(-2, $this->math->division(-6, 3));
        $this->assertEquals(0, $this->math->division(0, 5));
    }

    public function testDivisionParZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division par zéro impossible.");
        $this->math->division(5, 0);
    }
}
