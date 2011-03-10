<?php

require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__) . '/../KataFizzBuzz.php';

/**
 * Test class for KataFizzBuzz.
 * Generated by PHPUnit on 2011-03-03 at 22:53:43.
 */
class KataFizzBuzzTest extends PHPUnit_Framework_TestCase {

    /**
     * @var KataFizzBuzz
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new KataFizzBuzz;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    public function testFizzBuzz() {
        $this->assertEquals($this->object->fizzBuzz(1),1);
        $this->assertEquals($this->object->fizzBuzz(2),2);
        $this->assertEquals($this->object->fizzBuzz(3),"Fizz");
        $this->assertEquals($this->object->fizzBuzz(4),4);
        $this->assertEquals($this->object->fizzBuzz(5),"Buzz");
        $this->assertEquals($this->object->fizzBuzz(6),"Fizz");
        $this->assertEquals($this->object->fizzBuzz(7),7);
        $this->assertEquals($this->object->fizzBuzz(8),8);
        $this->assertEquals($this->object->fizzBuzz(9),"Fizz");
        $this->assertEquals($this->object->fizzBuzz(10),"Buzz");
        $this->assertEquals($this->object->fizzBuzz(11),11);
        $this->assertEquals($this->object->fizzBuzz(12),"Fizz");
        $this->assertEquals($this->object->fizzBuzz(13),13);
        $this->assertEquals($this->object->fizzBuzz(14),14);
        $this->assertEquals($this->object->fizzBuzz(15),"FizzBuzz");
        $this->assertEquals($this->object->fizzBuzz(16),16);
        $this->assertEquals($this->object->fizzBuzz(17),17);
        $this->assertEquals($this->object->fizzBuzz(18),"Fizz");
        $this->assertEquals($this->object->fizzBuzz(19),19);
        $this->assertEquals($this->object->fizzBuzz(20),"Buzz");
        $this->assertEquals($this->object->fizzBuzz(54),"Fizz");
    }

        public function testFizzBuzz2() {
        $this->assertEquals($this->object->fizzBuzz2(1),1);
        $this->assertEquals($this->object->fizzBuzz2(2),2);
        $this->assertEquals($this->object->fizzBuzz2(3),"Fizz");
        $this->assertEquals($this->object->fizzBuzz2(4),4);
        $this->assertEquals($this->object->fizzBuzz2(5),"Buzz");
        $this->assertEquals($this->object->fizzBuzz2(6),"Fizz");
        $this->assertEquals($this->object->fizzBuzz2(7),7);
        $this->assertEquals($this->object->fizzBuzz2(8),8);
        $this->assertEquals($this->object->fizzBuzz2(9),"Fizz");
        $this->assertEquals($this->object->fizzBuzz2(10),"Buzz");
        $this->assertEquals($this->object->fizzBuzz2(11),11);
        $this->assertEquals($this->object->fizzBuzz2(12),"Fizz");
        $this->assertEquals($this->object->fizzBuzz2(13),"Fizz");
        $this->assertEquals($this->object->fizzBuzz2(14),14);
        $this->assertEquals($this->object->fizzBuzz2(15),"FizzBuzz");
        $this->assertEquals($this->object->fizzBuzz2(16),16);
        $this->assertEquals($this->object->fizzBuzz2(17),17);
        $this->assertEquals($this->object->fizzBuzz2(18),"Fizz");
        $this->assertEquals($this->object->fizzBuzz2(19),19);
        $this->assertEquals($this->object->fizzBuzz2(20),"Buzz");
        $this->assertEquals($this->object->fizzBuzz2(35),"FizzBuzz");
        $this->assertEquals($this->object->fizzBuzz2(54),"FizzBuzz");
    }

}
?>
