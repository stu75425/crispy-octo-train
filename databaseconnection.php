<?php

$servername = "127.0.0.1";
$username = "root";
$password = "Rhubarb123!!!";
$db = "patient";

$conn = mysqli_connect( $servername, $username, $password, $db);

if (!$conn) {
    die("Connectoin Failed: " . mysqli_connect_error());
}

echo "Connected Successfully";
?>