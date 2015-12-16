<?php

session_start();

if(isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
}
if(isset($_SESSION['pw']))
{
	$pass = $_SESSION['pw'];
}
if(isset($_SESSION['fn']))
{
	$fn = $_SESSION['fn'];
}
if(isset($_SESSION['ln']))
{
	$ln = $_SESSION['ln'];
}

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');

$sql= "SELECT aid FROM Admin ORDER BY aid DESC LIMIT 1";
$result= $con->query($sql);
foreach($result as $row){
	$aid=$row['aid'];
}
$aid++;

$sql2 = "SELECT acid FROM AccountCredentials ORDER BY acid DESC LIMIT 1";
$result= $con->query($sql2);
foreach($result as $row){
	$acid=$row['acid'];
}
$acid++;

$sql= "INSERT INTO Admin (aid,fn,ln,email) VALUES ('$aid', '$fn', '$ln', '$email')";
$sql2 = "INSERT INTO AccountCredentials (acid,pass,perm,email) VALUES ('$acid', '$pass', 0, '$email')";

if($con->query($sql2) == TRUE && $con->query($sql) == TRUE)
{
	header("LOCATION:../html/admincreatesuccess.html");
}

?>
