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

echo "Your adaptibility score was $Adapt, your friendly score was $Friendly, your needs score was $Needs, your trainability score was $Train";
?>