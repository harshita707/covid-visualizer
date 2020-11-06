<?php

// Host name
$host = "localhost";

// Database username
$username = "root";

// Database password
$password = "";

// Name of database
$database = "form_validation";

$conn = mysqli_connect($host, $username, $password) or die ("Could not connect");
$db = mysqli_select_db($conn, $database) or die ("Could not select DB");

?>