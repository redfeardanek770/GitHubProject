<?php
// Initialize variables
$git_url = "https://github.com/YourUsername/YourProject.git";

// Function to clone the repository
function cloneRepository($url) {
    // Clone the repository into your local project directory
    $thisDir = getcwd();
    $tempDir = "temp";
    if (!is_dir($tempDir)) {
        mkdir($tempDir, 0755, true);
    }
    copy($url, "$tempDir/$url");
    return $tempDir;
}

// Clone the repository
$localDir = cloneRepository($git_url);

// Initialize variables for file operations
$file = "$localDir/README.md";
$data = [];
$filename = "src/".basename($file);
if (!is_file($filename)) {
    // Create file if it doesn't exist
    $fh = fopen($filename, "w");
    fwrite($fh, "<h1>My First PHP Project</h1>");
    fclose($fh);

    // Write data to the file
    readfile($file);
}
