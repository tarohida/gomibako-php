<?php


namespace tests;


use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function test_sample()
    {
        $qiitadon = $this->createStub(Qiitadon::class);
        var_dump(get_class($qiitadon));
        var_dump(get_parent_class($qiitadon));
        $this->assertInstanceOf(Qiitadon::class, $qiitadon);
    }

    public function test_getStatus()
    {
        $qiitadon = $this->createStub(Qiitadon::class);
        $qiitadon->method('getStatus')
            ->willReturn(500);
        $this->assertSame(500, $qiitadon->getStatus());
    }
}