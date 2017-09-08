<?php

//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "bb51bb14db53d6";
$password = "9d126a5a";
$db = "heroku_fc6cc6a7bdcfbd7";

$conn = new mysqli($server, $username, $password, $db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
