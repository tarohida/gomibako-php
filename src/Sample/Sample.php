<?php
namespace tarospace\Sample;

class Sample
{
    public static function alphabet(int $input): ?string
    {
        if (($input < 1) OR ($input > 26)) {
            return NULL;
        }
        $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        return $alphabet[$input -1];
    }
}