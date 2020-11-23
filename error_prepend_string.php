<?php

ini_set('error_reporting', E_ALL);

// なぜかini_set()を行ってもうまく設定されない．
/*
 * ```
 * $ php error_prepend_string.php | grep '^error_prepend_string'
 * error_prepend_string => error_prepend_stringで出力 => no value
 * $ php error_prepend_string.php | grep '^error_append_string'
 * error_append_string => error_append_stringで出力 => no value
 * ```
 *
 * PHP_INI_ALLなんですけどね
 * https://www.php.net/manual/ja/ini.list.php
 */

var_dump(ini_set('error_prepend_string', 'error_prepend_stringで出力'));
var_dump(ini_set('error_append_string', 'error_append_stringで出力'));

$message = 'うんち';
error_log($message, 3, './error.log');
phpinfo();
// echo $a;