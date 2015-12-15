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

$sql = "SELECT email FROM Users WHERE email='$Email'";
$result= $con->query($sql);;
    if($result->num_rows == 0)
    {
        header("Location:createuser.html");
    }
    else
    {
        echo 'Sorry, that email is already in use.<br>';
        echo '<form action="signup.html">
                <button type="submit">Try Again</button>
            </form>';
    }

?>