<?php

$varName = 'ThisIsVarName';
$$varName = 'value';

var_dump(get_defined_vars());