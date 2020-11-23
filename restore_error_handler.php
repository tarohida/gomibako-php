<?php

function error_handler()
{
    echo 'おちんぽ' . PHP_EOL;
}

set_error_handler('error_handler');

// echo $a;

restore_error_handler();

// echo $b;