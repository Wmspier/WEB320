<?php
if(isset($_POST['email']))
{
	$email = $_POST['email'];
}
if(isset($_POST['password']))
{
	$pass = $_POST['password'];
}
if(isset($_POST['firstname']))
{
	$fn = $_POST['firstname'];
}
if(isset($_POST['lastname']))
{
	$ln = $_POST['lastname'];
}
if(isset($_POST['address']))
{
	$addr = $_POST['address'];
}
if(isset($_POST['city']))
{
	$city = $_POST['city'];
}
if(isset($_POST['state']))
{
	$state = $_POST['state'];
}
if(isset($_POST['zip']))
{
	$zip = $_POST['zip'];
}
if(isset($_POST['phone']))
{
	$phone = $_POST['phone'];
}

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');

$sql= "SELECT acid FROM AccountCredentials ORDER BY acid DESC LIMIT 1";
$result= $con->query($sql);
foreach($result as $row){
	$acid=$row['acid'];
}
$acid++;

$sql= "INSERT INTO AccountCredentials (acid,pass,perm,email) VALUES ('$acid', '$pass', 1, '$email')";
if($con->query($sql) === TRUE)
{
	header("LOCATION:../html/sign.html");
}
/*else
{
	echo "fail<br>";
}*/

$sql= "SELECT uid FROM Users ORDER BY uid DESC LIMIT 1";
$result= $con->query($sql);
foreach($result as $row){
	$uid=$row['uid'];
}
$uid++;

$sql= "INSERT INTO Users (uid,fn,ln,address,city,state,zip,email,phone) VALUES ($uid, '$fn', '$ln', '$addr', '$city', '$state', '$zip', '$email', $phone)";
if($con->query($sql) === TRUE)
{
	header("LOCATION:../html/sign.html");
}
/*else
{
	echo "fail<br>";
}*/

?>
