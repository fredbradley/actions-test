<?php

function test(string $string): string
{
    return $string;
}

function testAgain(int $int): int
{
    return $int;
}

function isInt($var): bool
{
    if ($var instanceof int) {
        return true;
    }
    return false;
}
