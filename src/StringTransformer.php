<?php

declare(strict_types=1);

namespace YuzyukRoman\Reverse;

class StringTransformer
{
    public static function reverse(string $str): string {
        return strrev($str);
    }

    public static function doubleReverse(string $str): string {
        return $str;
    }
}
