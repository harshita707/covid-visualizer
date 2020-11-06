<?php

$name = $_POST["name"];
$password = $_POST["password"];
$salt = "salt";
$password_encrypted = sha1($password.$salt);
$msg ='';

if(isset($email, $password)) {
    ob_start();
	include('conn.php');
	$myname = stripslashes($name);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($conn, $myname);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
	
$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE name = '".$name."' and 
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	$msg = "Successful";
	header("location:form_login.html?msg=$msg");
}
else {
	$msg = "Wrong Username or Password. Please retry";
	header("location:form_login.html?msg=$msg");
}
ob_end_flush();
}
else {
    header("location:index.php?msg=Please enter some username and password");
}


?>