<?php
    // Define the database connection parameters
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'github_project');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'password');

    // Connect to the database
    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Get all users from the database
    $users = $db->query("SELECT * FROM users");

    // Output the results
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $users->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['email']) . "</td></tr>";
    }
    echo "</table>";
    $db->close();
?>
