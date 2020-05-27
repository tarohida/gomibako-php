<?php
use PHPUnit\Framework\TestCase;
use tarohida\Sample\Sample;

class SampleTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     */
    public function testReturnHatsuneMiku(int $input, ?string $expected): void
    {
        $this->assertSame($expected, Sample::getHatsuneMiku($input));
    }

    public function inputProvider()
    {
        return [
            [39, 'ﾊﾂﾈﾐｸ'],
            [0, NULL],
            [-1, NULL],
            [1, NULL],
            [40, NULL],
            [38, NULL]
        ];
    }
}
