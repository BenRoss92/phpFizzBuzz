<?php

  use PHPUnit\Framework\TestCase;

  require './src/FizzBuzz.php';

  class FizzBuzzTest extends TestCase
  {
      public function testMultipleOfThreeReturnsFizz()
      {
        $this->assertEquals('Fizz', fizzBuzz(3));
      }

      public function testMultipleOfFiveReturnsBuzz()
      {
        $this->assertEquals('Buzz', fizzBuzz(5));
      }

      public function testMultipleOfThreeAndFiveReturnsFizzBuzz()
      {
        $this->assertEquals('FizzBuzz', fizzBuzz(15));
      }
  }

?>
