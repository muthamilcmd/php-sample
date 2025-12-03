<?php

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

$conn = mysqli_init();

// Azure MySQL requires SSL
mysqli_ssl_set($conn, NULL, NULL, NULL, '/home/site/wwwroot/DigiCertGlobalRootCA.crt.pem', NULL);

if (!mysqli_real_connect($conn, $host, $user, $pass, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die('Database Connection Failed: ' . mysqli_connect_error());
}
?>
