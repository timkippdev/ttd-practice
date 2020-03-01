<?php

namespace Tests\Calculator;

use App\Calculator\Calculator;
use Exception;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    public function test_add() 
    {
        $calculator = new Calculator();
        
        $result = $calculator->add(1, 6);

        $this->assertEquals(7, $result);
    }

    public function test_subtract() 
    {
        $calculator = new Calculator();
        
        $result = $calculator->subtract(9, 6);

        $this->assertEquals(3, $result);
    }

    public function test_multiply() 
    {
        $calculator = new Calculator();
        
        $result = $calculator->multiply(4, 7);

        $this->assertEquals(28, $result);
    }

    public function test_divide() 
    {
        $calculator = new Calculator();
        
        $result = $calculator->divide(100, 5);

        $this->assertEquals(20, $result);
    }

    public function test_divide_denominatorMustNotBeZero() 
    {
        $calculator = new Calculator();

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Denominator must not be zero');
        
        $calculator->divide(3, 0);
    }

}