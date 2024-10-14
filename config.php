<?php

//Custom error handler

function customErrorHandler($errno, $errstr, $errfile, $errline) {
    $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline \n";
    error_log($errorMessage . PHP_EOL, 3, 'errors.log');
    echo "Sorry an error accured";
    return true;
}
set_error_handler('customErrorHandler');

// Disable displaying errors to the browser
ini_set('display_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log','errors.log');
error_reporting(E_ALL);
?>