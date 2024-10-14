// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    // Create a custom error message
    $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline";

    // Log the error to a file
    error_log($errorMessage, 3, '/path/to/your/error_log.txt');

    // Optionally, you can display a user-friendly message to the user
    // echo "An error occurred. Please try again later.";
    
    // Prevent the PHP internal error handler from being invoked
    return true;
}

// Set the custom error handler
set_error_handler('customErrorHandler');

// Disable displaying errors to the browser
ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log', '/path/to/your/error_log.txt');
error_reporting(E_ALL);