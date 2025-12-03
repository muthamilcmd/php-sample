<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

// Init MySQL with SSL
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "/home/site/wwwroot/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

if (!mysqli_real_connect($conn, $host, $user, $pass, $db, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

