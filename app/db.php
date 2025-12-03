<?php

// Read values from App Service environment variables
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// If ANY variable is missing → fail gracefully
if (!$host || !$user || !$pass || !$dbname) {
    die("Missing environment variables. Please set DB_HOST, DB_USER, DB_PASS, DB_NAME in App Service.");
}

// Create MySQL connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Connection check
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
