<?php

namespace Tests\Unit;

use App\Domain\Palindrome;
use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
    /** @var array */
    private $words = [
        "deleveled" => true,
        "delevedel" => false,
        "hello" => false,
        "f" => true,
        "kayak" => true,
        "cquential" => false,
        "CQuential" => false,
        "step on no pets" => true,
        "Step on no pets" => true
    ];

    public function testArrayOfWords()
    {
        foreach ($this->words as $word => $isPalindrome) {
            if (Palindrome::isPalindrome($word) !== $isPalindrome) {
                $this->assertTrue(false, "$word expected to be " . ($isPalindrome ? "" : "not ") . "a palindrome");
            }
        }
        $this->assertTrue(true);
    }
}
