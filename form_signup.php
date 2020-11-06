<?php  

session_start();
require("conn.php");

$name = $_POST['name'];
$password = $_POST['password'];
$salt = "salt";
$password_encrypted = sha1($password.$salt);

$sql = "INSERT INTO signup (name, password) 
VALUES ('$name', '$password_encrypted')";

$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
header("Location:form_login.html");
	exit;
?>