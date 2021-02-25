<?php

/**
 * @param  string  $string
 *
 * @return string
 */
function test(string $string): string
{
    return $string;
}

/**
 * @param  int  $int
 *
 * @return int
 */
function testAgain(int $int): int
{
    return $int;
}

/**
 * @param $var
 *
 * @return bool
 */
function isInt($var): bool
{
    if ($var instanceof int) {
        return true;
    }
    return false;
}
