<?php

function error_handler()
{
    echo 'エラーでーす' . PHP_EOL;
    trigger_error('エラーの投げ直しも可能です', E_USER_NOTICE);
    throw new Exception('Exceptionも投げれる');
}

set_error_handler('error_handler');

// echo $a;