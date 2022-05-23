<?php
// initial the testing environment class to use the framework
class CalculatorTest extends \PHPUnit\Framework\TestCase {
    // make a test methode for the function add() from class Calculator
    public function testAdd() {
        // call the methode add() and set testing parametres exmpl 20 + 5 
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);
            //test the result expection with assertEquials 
        $this->assertEquals(25,$result);
    }
    public function testsubtract() {
        $calculator = new App\Calculator;
        $result = $calculator->subtract(10,5);

        $this->assertEquals(5,$result);
    }
    public function testmultiply() {
        $calculator = new App\Calculator;
        $result = $calculator->multiply(10,5);

        $this->assertEquals(50,$result);
    }
    public function testdivide() {
        $calculator = new App\Calculator;
        $result = $calculator->divide(10,2);

        $this->assertEquals(5,$result);
    }
}
