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
if(isset($_POST['fn'])){
    $fn = $_POST['fn'];
    $_SESSION['fn']=$fn;
}
if(isset($_POST['ln'])){
    $ln = $_POST['ln'];
    $_SESSION['ln']=$ln;
}

$sql = "SELECT email FROM Admin WHERE email='$Email'";
$result= $con->query($sql);;
    if($result->num_rows == 0)
    {
       header("Location:createadmin.php");
    }
    else
    {
        echo 'Sorry, that email is already in use.<br>';
        echo '<form action="../html/adminaddnew.html">
                <button type="submit">Try Again</button>
            </form>';
    }

?>