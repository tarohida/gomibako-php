<?php

// コールバック関数の例
function myCallbackFunction()
{
    echo "hello PHP\n";
}

class MyClass
{
    static function myCallbackMethod()
    {
        echo "Hello PHP2\n";
    }
}

myCallbackFunction();
call_user_func('myCallbackFunction');

call_user_func(['MyClass', 'myCallbackMethod']);

$obj = new MyClass();
call_user_func([$obj, 'myCallbackMethod']);

call_user_func('\MyClass::myCallbackMethod');