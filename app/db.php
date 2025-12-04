<?php

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$dbname = getenv("DB_NAME");
$port = getenv("DB_PORT");

$conn = mysqli_init();

// SSL required
mysqli_ssl_set($conn, NULL, NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);

if (!mysqli_real_connect($conn, $host, $user, $pass, $dbname, $port, MYSQLI_CLIENT_SSL)) {
    die("DB ERROR: " . mysqli_connect_error());
}

?>

