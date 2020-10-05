<?php  

session_start();
require("conn.php");

$sym=$_GET['sym'];
$name=$_GET['name'];

$email=$_GET['email'];

$contact=$_GET['mobile'];

$symptom="";
foreach ($sym as $ele){ 
    $symptom.=$ele.", ";
}


$sql = "INSERT INTO helpline (name, email, contact, symptoms) 
VALUES ('$name', '$email', '$contact', '$symptom')";

$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
header("Location:helpline.php");
	exit;
?>
