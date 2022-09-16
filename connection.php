<?php

$db = 'mysql:host=localhost;port=3306;dbname=database';
$username = 'root';
$password = '';

$db = new PDO($db, $username, $password);

$query = "SELECT * FROM people";

$result = $dbh->query($query);

foreach($result as $item) {
    echo "[" . $item['people_id'] . "] " . $item['fullname'] . "<BR>";
}