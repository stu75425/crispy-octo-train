<?php 
$server = "localhost";
$dbuser = "root";
$password = "Rhubarb123!!!";

$link = mysqli_connect($server, $dbuser, $password);
mysqli_select_db($link "patients");

$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

$sql_insert = "INSERT INTO patients (email, password, confirm_password")
VALUES('$email', '$password','confirm_password');

if(mysqli_query($link, $sql_insert)) {
    echo "You have successfully registered!";
}
else {
    echo "an error has occured!";
}
mysqli_close($link);
?>