<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "classroom_mgmt";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
