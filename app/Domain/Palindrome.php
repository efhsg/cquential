<?php


namespace App\Domain;


class Palindrome
{
    /**
     * @param string $word
     * @return bool
     */
    public static function isPalindrome(string $word): bool
    {
        return (strrev(strtolower($word)) == strtolower($word));
    }
}
