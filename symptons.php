<?php  

session_start();
require("conn.php");

$sym=$_GET['sym'];
$name=$_GET['name'];
$age=$_GET['age'];
$email=$_GET['email'];
$gen=$_GET['gen'];
$contact=$_GET['mobile'];
$dis=$_GET['district'];
$state=$_GET['state'];
$cat=$_GET['cat'];
$add=$_GET['address'];
$pin=$_GET['pin'];
$dob=$_GET['dob'];
$aadhar=$_GET['aadhar'];
$trav=$_GET['trav'];
$fcountry=$_GET['fcountry'];
$pat=$_GET['pat'];
$pname=$_GET['pname'];
$quar=$_GET['quar'];
$cond=$_GET['cond'];
$sdate=$_GET['sdate'];
$symptom="";
foreach ($sym as $ele){ 
    $symptom.=$ele.", ";
}
$gender="";
foreach ($gen as $ele){ 
    $gender.=$ele." ";
}
$condition="";
foreach ($cond as $ele){ 
    $condition.=$ele.", ";
}

$sql = "INSERT INTO helpline (name, email, contact, symptoms,age,gender,district, state, category, address, pin, dob, aadhar, travel, fcountry, patient, pname, quarantined, conditions, sdate) 
VALUES ('$name', '$email', '$contact', '$symptom','$age','$gender','$dis','$state','$cat','$add', '$pin', '$dob', '$aadhar', '$trav', '$fcountry', '$pat', '$pname', '$quar', '$condition','$sdate')";

$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
header("Location:helpline.php");
	exit;
?>
