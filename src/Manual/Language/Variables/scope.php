<?php
declare(strict_types=1);

namespace tarohida\Manual\Language\Variables;

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
assert($a === 1);
assert($b === 3);