<?php

//header('Location: main.php');
session_start();

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');
$_SESSION['timeout']=time();

if(isset($_POST['inputEmail'])){
    $Email = $_POST['inputEmail'];
    $_SESSION['inputFN']=$Email;
}
if(isset($_POST['inputPW'])){
    $PW = $_POST['inputPW'];
    $_SESSION['inputPW']=$PW;
}

if(isset($_POST['type'])){
    $type = $_POST['type'];
    $_SESSION['type']=$type;
   if($type=='user') 
   {
	$sql = "SELECT fn,ln FROM Users WHERE fn='$Email' AND ln='$PW'";
	$result= $con->query($sql);
        if($result->num_rows == 0)
		{
			echo 'Invalid username or password<br>';
			echo '<form action="signin.html">
					<button type="submit">Try Again</button>
				</form>';
		}
        else
		{
			echo '<p>Logged In As: ', $Email,'</p>';
			echo "<br>Account Type: User";
			echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
		}
	}
	else if($type=='admin') 
	{
	$sql = "SELECT fn,ln FROM Admin WHERE fn='$Email' AND ln='$PW'";
	$result= $con->query($sql);
        if($result->num_rows == 0)
		{
			echo 'Invalid username or password<br>';
			echo '<form action="signin.html">
					<button type="submit">Try Again</button>
				</form>';
		}
        else
		{
			echo '<p>Logged In As: ', $Email,'</p>';
			echo "<br>Account Type: Admin";
			echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
		}
	}
}else{
    $type='guest';
    $_SESSION['type']=$type;
	echo '<p>Logged In As: ', $Email,'</p>';
			echo "<br>Account Type: Guest";
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
        header("Location:signin.html");
    }
}



?>