<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = getenv('DB_PORT') ?: 3306;

// SSL CA certificate path
$sslCA = __DIR__ . "/DigiCertGlobalRootG2.crt.pem";

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $sslCA, NULL, NULL);

if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port, MYSQLI_CLIENT_SSL)) {
    error_log("MySQL Connection Error: " . mysqli_connect_error());
    die("DB CONNECTION FAILED");
}
?>

