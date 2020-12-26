<?php

$folder = './files/';

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

$contents = 'うんち';

file_put_contents($folder.'test.txt', $contents);

$get_content = file_get_contents($folder.'test.txt');

var_dump($get_content);