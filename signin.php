<?php

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "salt";
$password_encrypted = sha1($password.$salt);
$msg ='';

if(isset($email, $password)) {
    ob_start();
	include('conn.php');
	$myemail = stripslashes($email);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($conn, $myemail);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
	
$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	$_SESSION['email']= "admin";
	$_SESSION['password']= "password";
	session_start();
	$_SESSION['name']= $myusername;
	header("location:helpline.php?msg=$myusername");
}
else {
	$msg = "Wrong Username or Password. Please retry";
	header("location:index.php?msg=$msg");
}
ob_end_flush();
}
else {
    header("location:index.php?msg=Please enter some username and password");
}


?>