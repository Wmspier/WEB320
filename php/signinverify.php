<?php

//header('Location: main.php');
session_start();

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');
$_SESSION['timeout']=time();

if(isset($_POST['inputEmail'])){
    $Email = $_POST['inputEmail'];
    $_SESSION['email']=$Email;
}
if(isset($_POST['inputPW'])){
    $PW = $_POST['inputPW'];
    $_SESSION['pw']=$PW;
}

if(isset($_POST['type'])){
    $type = $_POST['type'];
    $_SESSION['type']=$type;
   if($type=='user') 
   {
	$sql = "SELECT email FROM Users WHERE email='$Email'";
	$sql2= "SELECT pass from AccountCredentials WHERE pass='$PW'";   
	$result= $con->query($sql);
	$result2= $con->query($sql2);
		if($result->num_rows == 0 || $result2->num_rows == 0)
		{
			echo 'Invalid username or password<br>';
			echo '<form action="../html/signin.html">
					<button type="submit">Try Again</button>
				</form>';
		}
        else
		{
			$result = $con->query("SELECT * FROM Users WHERE email = '$Email'");
			foreach($result as $row){
				$_SESSION['uID']=$row['uid'];
				$_SESSION['fn']=$row['fn'];
				$_SESSION['ln']=$row['ln'];
				$_SESSION['address']=$row['address'];
				$_SESSION['city']=$row['city'];
				$_SESSION['state']=$row['state'];
				$_SESSION['zip']=$row['zip'];
				$_SESSION['phone']=$row['phone'];
				$_SESSION['userAdapt']=$row['userAdapt'];
				$_SESSION['userFriendly']=$row['userFriendly'];
				$_SESSION['userNeeds']=$row['userNeeds'];
				$_SESSION['userTrain']=$row['userTrain'];
			}
			echo '<p>Logged In As: ', $Email,'
				  <br>Account Type: User</p>';
			echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
		}
	}
	else if($type=='admin') 
	{
	$sql = "SELECT email FROM Admin WHERE email='$Email'";
	$sql2= "SELECT pass from AccountCredentials WHERE pass='$PW'";
	$result3= $con->query($sql);
	$result4= $con->query($sql2);
        if($result3->num_rows == 0 || $result4->num_rows == 0)
		{
			echo 'Invalid username or password<br>';
			echo '<form action="../html/signin.html">
					<button type="submit">Try Again</button>
				</form>';
		}
        else
		{
			$result3 = $con->query("SELECT * FROM Admin WHERE email='$Email'");
			foreach($result3 as $row){
			$_SESSION['aID']=$row['aid'];
			$_SESSION['fn']=$row['fn'];
			$_SESSION['ln']=$row['ln'];
			}
			echo '<p>Logged In As: ', $Email,'
				  <br>Account Type: Admin</p>';
			echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
		}
	}
}else{
    $type='guest';
    $_SESSION['type']=$type;
	$_SESSION['fn']='Guest';
	$_SESSION['ln']='';
	$Email='Guest';
	echo '<p>Logged In As: ', $Email,'
		  <br>Account Type: Guest</p>';
	echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
}

if(isset($_POST['remember-me'])){
    if($_SESSION['type'] != "guest") echo "<br>Your sign-in info will be remembered for 30 days";
    $inactive=2592000;
}else{ 
    if($_SESSION['type'] != "guest") echo "<br>Your sign-in info will not be remembered";
    $inactive=3600;
}

if(isset($_SESSION['timeout'])){
    $sessionLifeSpan=time() - $_SESSION['timeout'];
    if($sessionLifeSpan>$inactive){
        $_SESSION=array();
        session_destroy();
        header("Location:../html/signin.html");
    }
}



?>