<?php

$white = 'white';
$black = 'black';
$black =& $white;

var_dump(get_defined_vars());

$white = 'not white';

var_dump(get_defined_vars());