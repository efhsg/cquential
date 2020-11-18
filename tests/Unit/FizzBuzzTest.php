<?php

namespace Tests\Unit;

use App\Domain\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    /** @var array */
    private $numbers = [
        1 => "1",
        2 => "2",
        3 => "Fizz",
        4 => "4",
        5 => "Buzz",
        6 => "Fizz",
        7 => "7",
        8 => "8",
        14 => "14",
        15 => "FizzBuzz",
        16 => "16",
        89 => "89",
        90 => "FizzBuzz",
        91 => "91",
        98 => "98",
        99 => "Fizz",
        100 => "Buzz",
        1500 => "FizzBuzz",
    ];

    public function testArrayOfNumbers()
    {
        foreach ($this->numbers as $number => $fizzbuzz) {
            $fizzbuzzResult = FizzBuzz::fizzbuzz($number);
                $this->assertTrue($fizzbuzzResult == $fizzbuzz, "" . $number . " expected to be '" . $fizzbuzz . "' but is '" . $fizzbuzzResult . "'");
        }
        $this->assertTrue(true);

    }
}
