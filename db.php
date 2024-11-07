<?php

$servername = "dpg-csm8daogph6c73aeec90-a";
$port = "5432";
$username = "electromart_md9x_user";
$password = "i8NIwaleuY0La76F4nMLcqIapg4qiLH1";
$db = "electromart_md9x";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
