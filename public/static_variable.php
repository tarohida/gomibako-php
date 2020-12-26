<?php

function myStaticFunction()
{
    static $index = 0;
    echo "$index\n";
    $index++;
}

myStaticFunction();
myStaticFunction();
myStaticFunction();
myStaticFunction();
myStaticFunction();