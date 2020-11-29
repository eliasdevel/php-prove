<?php
use PHPUnit\Framework\TestCase;

use Classmap\Number;

class NumberTest extends TestCase
{
    public function testPrintFive()
    {
        $this->expectOutputString("Five \n");

        $five = new Number(5);

        $five->print();
    }

    public function testPrintNormal()
    {
        $this->expectOutputString("1".PHP_EOL);

        $five = new Number(1);

        $five->print();
    }

    public function testPrintThreeAndFive()
    {
        $this->expectOutputString("Three and Five \n");

        $five = new Number(15);

        $five->print();
    }

    public function testPrintThree()
    {
        $this->expectOutputString("Three \n");

        $five = new Number(6);

        $five->print();
    }
}
