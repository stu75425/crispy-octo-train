<?php
$conn = mysqli_connect("127.0.0.1", "stu75425", "Rubybooby21!", "appointments");

if (mysqli_connect_errno()){
    echo "failed to connect to MySQL: " . mysqli_connect_error();
}
?>