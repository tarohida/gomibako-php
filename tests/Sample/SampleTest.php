<?php

use tarospace\Sample\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     */
    public function testMySwitch(int $input, ?string $expected): void
    {
        $this->assertSame($expected, Sample::alphabet($input));
    }

    public function inputProvider()
    {
        return [
            [1, 'a'],
            [3, 'c'],
            [4, 'd'],
            [11, 'k'],
            [0, NULL],
            [-1, NULL],
            [25, 'y'],
            [26, 'z'],
            [27, NULL],
            [300, NULL]
        ];
    }

}