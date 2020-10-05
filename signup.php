<?php  

session_start();
require("conn.php");

$name = $_POST['name'];

$email = $_POST['email'];
$password = $_POST['password'];
$salt = "salt";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO signup (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";

$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
header("Location:signlog.html");
	exit;
?>




















