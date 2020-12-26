<?php

function exec_func()
{
    // echo $a; // E_NOTICE
}

$constants = [
    'E_ERROR' => E_ERROR,
    'E_WARNING' => E_WARNING,
    'E_PARSE' => E_PARSE,
    'E_NOTICE' => E_NOTICE,
    'E_CORE_ERROR' => E_CORE_ERROR,
    'E_CORE_WARNING' => E_CORE_WARNING,
    'E_COMPILE_ERROR' => E_COMPILE_ERROR,
    'E_COMPILE_WARNING' => E_COMPILE_WARNING,
    'E_USER_ERROR' => E_USER_ERROR,
    'E_USER_WARNING' => E_USER_WARNING,
    'E_USER_NOTICE' => E_USER_NOTICE,
    'E_STRICT' => E_STRICT,
    'E_RECOVERABLE_ERROR' => E_RECOVERABLE_ERROR,
    'E_DEPRECATED' => E_DEPRECATED,
    'E_USER_DEPRECATED' => E_USER_DEPRECATED
];

foreach ($constants as $key => $constant) {
    ini_set('error_reporting', $constant);
    echo "ここでエラーが出たら，${key}だよ！" . PHP_EOL;
    exec_func();
    echo '---' . PHP_EOL;
}