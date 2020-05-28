<?php
use PHPUnit\Framework\TestCase;
use tarohida\TDDPractice\Weekday;

class WeekdayTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     */
    public function testGetJapaneseWeekday(int $input, ?string $expected): void
    {
        $this->assertSame($expected, Weekday::getJapaneseWeekday($input));
    }

    public function inputProvider()
    {
        return [
            [0, "日"],
            [1, "月"],
            [2, "火"],
            [3, "水"],
            [4, "木"],
            [5, "金"],
            [6, "土"]
        ]; 
    }
}