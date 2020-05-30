<?php
use PHPUnit\Framework\TestCase;
use tarohida\TDDPractice\Sample;

class SampleTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     */
    public function testCheckEven(int $input, bool $expected): void
    {
        $actual = Sample::checkEven($input);
        $this->assertSame($expected, $actual);
    }

    public function inputProvider()
    {
        return [
            [2, true],
            [3, false],
            [0, true],
            [-5, false],
            [-6, true],
            [128, true],
            [127, false],
        ];
    }
}