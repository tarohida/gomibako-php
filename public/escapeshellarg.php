<?php

$invalid_dirname = '/tmp; cat ./README.md';

var_dump($invalid_dirname);
system("ls " . $invalid_dirname);

var_dump(escapeshellarg($invalid_dirname));
system("ls " . escapeshellarg($invalid_dirname));