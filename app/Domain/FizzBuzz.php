<?php


namespace App\Domain;


class FizzBuzz
{
    public static function print(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            echo self::fizzbuzz($i) . PHP_EOL;
        }
    }

    /**
     * @param int $num
     * @return string
     */
    public static function fizzbuzz(int $num): string
    {
        $isFizz = $num % 3 == 0;
        $isBuzz = $num % 5 == 0;
        $fizzBuzz = ($isFizz ? 'Fizz' : '') . ($isBuzz ? 'Buzz' : '');
        return !empty($fizzBuzz) ? $fizzBuzz : (string)$num;
    }

}
