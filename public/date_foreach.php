<?php

$begin = new DateTime( "2015-07-03" );
$end   = new DateTime( "2015-07-09" );

for($i = $begin; $i <= $end; $i->modify('+1 day')){
    echo $i->format(DATE_ISO8601) . PHP_EOL;
}
