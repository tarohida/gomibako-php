<?php
namespace tarohida\TDDPractice;

class Sample
{
    /**
     * checkEven
     * 
     * 偶数か否かを判定する。0と負の数も2で割って整数になるものは、偶数に含める。
     * 
     * @param int $input
     * 
     * @return bool
     */
    public static function checkEven(int $input): bool
    {
        $remainder = $input % 2;
        if ($remainder === 0) {
            return true;
        }
        return false;
    }
}