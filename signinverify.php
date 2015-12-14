<?php

//header('Location: main.php');
session_start();

if(isset($_POST['inputFN'])){
    $FN = $_POST['inputFN'];
    $_SESSION['inputFN']=$FN;
}
if(isset($_POST['inputLN'])){
    $LN = $_POST['inputLN'];
    $_SESSION['inputLN']=$LN;
}
if($FN && $LN) echo "Hello ", $FN, " ", $LN, "\n";

if(isset($_POST['group4'])){
    $type = $_POST['group4'];
    $_SESSION['type']=$type;
    echo "<br>You are logged in as a ";
   if($type=='user') echo "User";
   else if($type=='admin') echo "Admin";
}else{
    $type='guest';
    $_SESSION['type']=$type;
    echo "<br>You are logged in as a Guest";
}

if(isset($_POST['remember-me'])){
    echo "<br>Your sign-in info will be remembered for 30 days";
    $inactive=2592000;
}else{ 
    echo "<br>Your sign-in info will not be remembered";
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

$_SESSION['timeout']=time();



$html = <<< HTML
    <!DOCTYPE html>
    <html lang="en">
    <form action="main.php" method="post">
    <button type="submit">NEXT</button>
    </form>
    </html>
HTML;
echo $html;


?>