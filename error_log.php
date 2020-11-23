<?php

$message = 'エラーを発生させました';
$message_type = 0; // message sent to PHP's system logger
// $message_type = 1; // message sent to email address
// $message_type = 3; // message is append to the file destination
// $
error_log($message, $message_type);
error_log($message, 3, './error.log');