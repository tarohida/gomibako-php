<?php
namespace tarohida\TDDPractice;

class Weekday
{
    private static $japanese_weekday = ["日", "月", "火", "水", "木", "金", "土"];

    public static function getJapaneseWeekday(int $input): string
    {
        return self::$japanese_weekday[$input];
    }
}