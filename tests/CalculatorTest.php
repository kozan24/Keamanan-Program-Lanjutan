<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase{
    public function testAdd(){

        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }


    public function testSubtract(){

        $calculator = new App\Calculator;
        $result = $calculator->subtract(20,5);

        $this->assertEquals(15, $result);
    }

    public function testMultiply(){

        $calculator = new App\Calculator;
        $result = $calculator->multiply(20,5);

        $this->assertEquals(100, $result);
    }

    public function testDivide(){

        $calculator = new App\Calculator;
        $result = $calculator->divide(20,5);

        $this->assertEquals(4, $result);
    }

    public function testModulo(){

        $calculator = new App\Calculator;
        $result = $calculator->modulo(20,5);

        $this->assertEquals(4, $result);
    }
}