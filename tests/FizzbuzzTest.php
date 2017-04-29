<?php

  use PHPUnit\Framework\TestCase;

  require './src/FizzBuzz.php';

  class FizzBuzzTest extends TestCase
  {
      public function testMultipleOfThreeReturnsFizz()
      {
        $this->assertEquals(fizzBuzz(3), 'fizz');
      }
  }

?>
