<?php

namespace Tests\Unit;

use App\Domain\HowManySubstrings;
use PHPUnit\Framework\TestCase;

class HowManySubstringsTest extends TestCase
{

    private $word = "aabaa";

    /** @var array */
    private $startLengthResults = [
        [1, 1, 1],
        [1, 4, 8],
        [0, 3, 5]
    ];

    public function testHowManySubstrings()
    {
        foreach ($this->startLengthResults as $startLengthResult) {
            $this->assertEquals($startLengthResult[2],
                HowManySubstrings::calculateNumberOfSubstrings(substr($this->word, $startLengthResult[0],
                    $startLengthResult[1])));
        }
    }
}
