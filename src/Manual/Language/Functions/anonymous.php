<?php
declare(strict_types=1);

echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world'), PHP_EOL;
// helloWorld と出力します

$greet = function($name)
{
    printf("Hello %s" . PHP_EOL, $name);
};
$greet('World');
$greet('PHP');
assert($greet instanceof Closure);

$message = 'hello';

// $message を引き継ぎます
$example = function () use ($message) {
    var_dump($message);
};
$example();