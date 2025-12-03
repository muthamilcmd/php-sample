<?php

echo "<pre>";
echo "DB_HOST=" . getenv("DB_HOST") . "\n";
echo "DB_USER=" . getenv("DB_USER") . "\n";
echo "DB_NAME=" . getenv("DB_NAME") . "\n";

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "Connected successfully!";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
