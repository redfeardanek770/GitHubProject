<?php
// This is a PHP script to demonstrate basic error handling.
try {
    // Assuming an example of trying to open a file that doesn't exist.
    $file = fopen("nonexistent_file.txt", "r");
    
    if ($file === false) {
        throw new Exception("File could not be opened: nonexistent_file.txt");
    }
} catch (Exception $e) {
    echo "An error occurred while trying to open the file: " . $e->getMessage();
}
