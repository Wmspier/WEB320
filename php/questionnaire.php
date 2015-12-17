<?php

session_start();
if(isset($_SESSION['uID'])){
$userID = $_SESSION['uID'];
}

$Adapt = 0;
$Friendly = 0;
$Needs = 0;
$Train = 0;

if(isset($_POST['Q1'])){
    $Q1 = $_POST['Q1'];
    switch($Q1){
        case 1:
            $Adapt--;
            break;
        case 2:
            $Adapt++;
            break;
        case 3:
            $Adapt++;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q2'])){
    $Q2 = $_POST['Q2'];
    switch($Q2){
        case 1:
            $Adapt++;
            break;
        case 2:
            $Adapt--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q3'])){
    $Q3 = $_POST['Q3'];
    switch($Q3){
        case 1:
            $Needs--;
            break;
        case 2:
            $Needs++;
            break;
        case 3:
            $Needs++;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q4'])){
    $Q4 = $_POST['Q4'];
    switch($Q4){
        case 1:
            $Friendly++;
            break;
        case 2:
            $Friendly--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q5'])){
    $Q5 = $_POST['Q5'];
    switch($Q5){
        case 1:
            $Friendly++;
            break;
        case 2:
            $Friendly--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q6'])){
    $Q6 = $_POST['Q6'];
    switch($Q6){
        case 1:
            $Adapt--;
            break;
        case 2:
            $Adapt = $Adapt;
            break;
        case 3:
            $Adapt++;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q7'])){
    $Q7 = $_POST['Q7'];
    switch($Q7){
        case 1:
            $Adapt--;
            break;
        case 2:
            $Adapt++;
            break;
        case 3:
            $Adapt = $Adapt;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q8'])){
    $Q8 = $_POST['Q8'];
    switch($Q8){
        case 1:
            $Needs++;
            break;
        case 2:
            $Needs = $Needs;
            break;
        case 3:
            $Needs--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q9'])){
    $Q9 = $_POST['Q9'];
    switch($Q9){
        case 1:
            $Friendly++;
            break;
        case 2:
            $Friendly++;
            break;
        case 3:
            $Friendly--;
            break;
        case 4:
            $Friendly++;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q10'])){
    $Q10 = $_POST['Q10'];
    switch($Q10){
        case 1:
            $Train++;
            break;
        case 2:
            $Train--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q11'])){
    $Q11 = $_POST['Q11'];
    switch($Q11){
        case 1:
            $Train++;
            break;
        case 2:
            $Train++;
            break;
        case 3:
            $Train--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q12'])){
    $Q12 = $_POST['Q12'];
    switch($Q12){
        case 1:
            $Needs++;
            break;
        case 2:
            $Needs++;
            break;
        case 3:
            $Needs--;
            break;
        case 4:
            $Needs--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q13'])){
    $Q13 = $_POST['Q13'];
    switch($Q13){
        case 1:
            $Train++;
            break;
        case 2:
            $Train--;
            break;
        default:
            break;
    }
}
if(isset($_POST['Q14'])){
    $Q14 = $_POST['Q14'];
    switch($Q14){
        case 1:
            $Needs++;
            break;
        case 2:
            $Needs--;
            break;
        case 3:
            $Needs = 0;
            break;
        default:
            break;
    }
}
if($Needs < 0)
{
    $Needs = 0;
}
else if ($Needs > 5)
{
    $Needs = 5;
}
if($Train < 0)
{
    $Train = 0;
}
else if ($Train > 5)
{
    $Train = 5;
}
if($Friendly < 0)
{
    $Friendly = 0;
}
else if ($Friendly> 5)
{
    $Friendly = 5;
}
if($Adapt < 0)
{
    $Adapt = 0;
}
else if ($Adapt > 5)
{
    $Adapt = 5;
}

$sql = "UPDATE Users SET userAdapt=$Adapt WHERE uid=$userID;";
$sql2 = "UPDATE Users SET userFriendly=$Friendly WHERE uid=$userID;";
$sql3 = "UPDATE Users SET userNeeds=$Needs WHERE uid=$userID;";
$sql4 = "UPDATE Users SET userTrain=$Train WHERE uid=$userID;";

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');

$con->query($sql);
$con->query($sql2);
$con->query($sql3);
$con->query($sql4);

$html1=<<<HTML1
    <!DOCTYPE html>
    <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fetch / Main</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../css/main.css" rel="stylesheet">
  </head>
  <!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="main.php">Home</a>
          </div>
        </nav>

      </div>
    </div>
     <br></br>
HTML1;


$form=<<<FORM
<br>
<br>
<br>
<form action="profile.php" method = "post">
Your scores have been recorded. Go see your results and dog matches in your profile!
<br>
  <input type="submit" value="Go to Profile">
</form>

FORM;

$html2=<<<HTML2
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

HTML2;


echo $html1.$form.$html2;
?>