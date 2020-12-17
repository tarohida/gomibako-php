<?php

function plus($carry, $item)
{
    $carry = $carry . $item;
    return $carry;
}

$a = [1,2,3,4,5];

var_dump(array_reduce($a, "plus"));
