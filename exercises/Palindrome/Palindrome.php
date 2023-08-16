<?php

declare(strict_types=1);

namespace Exercises\Palindrome;

/**
 * Palindrome is a string that equals itself when reversed.
 * Non-alpha chars must also be included.
 *
 * @method static bool check(string $string)
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */
final class Palindrome
{
    public static function check(string $string):bool {
        $stringRevers= strrev($string);
        if( strcmp($string,$stringRevers) === 0)
            return true;
        return false;

    }
}
