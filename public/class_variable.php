<?php

class A
{
    public static $val = 0;
    public $val2 = 0;

    public static function incrementVal()
    {
        self::$val++;
    }

    public function incrementVal2()
    {
        $this->val2++;
    }
}

A::incrementVal();
var_dump(A::$val);
A::incrementVal();
var_dump(A::$val);
A::incrementVal();
var_dump(A::$val);
A::incrementVal();
var_dump(A::$val);

$a = new A();
$a->incrementVal2();
var_dump($a->val2);
$a = new A();
$a->incrementVal2();
var_dump($a->val2);
$a = new A();

A::incrementVal();
var_dump(A::$val);

