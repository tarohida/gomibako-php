<?php

use tarospace\Sample\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     */
    public function testMySwitch(int $input, string $expected): void
    {
        $this->assertSame($expected, Sample::alphabet($input));
    }

    public function inputProvider()
    {
        return [
            [1, 'a'],
            [3, 'c'],
            [4, 'd'],
            [11, 'k']
        ];
    }

}