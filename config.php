<?php

//Custom error handler

function customErrorHandler($errno, $errstr, $errfile, $errline) {
    $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline \n";
    error_log($errorMessage . PHP_EOL, 3, 'error_log.txt');
    echo "Sorry an error accured";
    return true;
}
set_error_handler('customErrorHandler');

// Disable displaying errors to the browser
ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log','error_log.txt');
error_reporting(E_ALL);
?>