<?php
// Create a new user account if it doesn't exist
if (!isset($_POST['username'])) {
    $username = $_POST['email'];
    $password = 'secret';
}
else {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

// Check if the email already exists
if (user_exists($username)) {
    echo "User with the specified username already exists.";
} else {
    // Insert user data into the database
    insert_user($username, $password);
}
