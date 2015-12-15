<?php

//header('Location: main.php');
session_start();

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');
$_SESSION['timeout']=time();

if(isset($_POST['inputFN'])){
    $FN = $_POST['inputFN'];
    $_SESSION['inputFN']=$FN;
}
if(isset($_POST['inputLN'])){
    $LN = $_POST['inputLN'];
    $_SESSION['inputLN']=$LN;
}

if(isset($_POST['type'])){
    $type = $_POST['type'];
    $_SESSION['type']=$type;
   if($type=='user') 
   {
	$sql = "SELECT fn,ln FROM Users WHERE fn='$FN' AND ln='$LN'";
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
			echo '<p>Logged In As: ', $FN, ' ',$LN,'</p>';
			echo "<br>Account Type: User";
			echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
		}
	}
	else if($type=='admin') 
	{
	$sql = "SELECT fn,ln FROM Admin WHERE fn='$FN' AND ln='$LN'";
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
			echo '<p>Logged In As: ', $FN, ' ',$LN,'</p>';
			echo "<br>Account Type: Admin";
			echo '<form action="main.php">
					<button type="submit">Continue</button>
				</form>';
		}
	}
}else{
    $type='guest';
    $_SESSION['type']=$type;
	$FN = "";
	$LN = "Guest";
	$_SESSION['inputFN']=$FN;
	$_SESSION['inputLN']=$LN;
	echo '<p>Logged In As: ', $FN, ' ', $LN,'</p>';
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