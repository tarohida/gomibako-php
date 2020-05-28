<?php
namespace tarohida\Sample;

class Sample{
    public static function getHatsuneMiku(int $input): ?string
    {
        if ($input === 39) {
            return 'ﾊﾂﾈﾐｸ';
        }
        return NULL;
    }
}