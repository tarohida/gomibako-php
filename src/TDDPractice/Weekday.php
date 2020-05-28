<?php
namespace tarohida\TDDPractice;

class Weekday
{
    private static $japanese_weekday = ["日", "月", "火", "水", "木", "金", "土"];

    public static function getJapaneseWeekday(int $input): string
    {
        if ($input < 0 OR $input > 6) {
            $message = "引数は、0から7の間で指定する必要があります。";
            throw new \InvalidArgumentException($message);
        }
        return self::$japanese_weekday[$input];
    }
}