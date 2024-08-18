<?php
// tests/CalculatorTest.php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(6, 3);
        $this->assertEquals(2, $result);
    }

    public function testDivideByZero()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->divide(6, 0);
    }
}

