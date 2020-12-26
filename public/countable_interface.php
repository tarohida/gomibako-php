<?php

class Kazoerukun implements Countable
{
    private $count = 0;

    public function add($object)
    {
        echo "Kazoerukun < I got Object! : '${object}'" . PHP_EOL;
        $this->count++;
    }

    public function count() {
        return $this->count;
    }
}

$kazoerukun = new Kazoerukun();
$kazoerukun->add('a');
var_dump(count($kazoerukun)); // 1

$kazoerukun->add('うんち');
$kazoerukun->add('うんち');

var_dump(count($kazoerukun)); // 3