<?php

$Adapt=$Friendly=$Needs=$Train=0;

if(isset($_POST['Q1'])){
    $Q1 = $_POST['Q1'];
    echo $Q1;
    switch($Q1){
        case 1:
            $Adapt++;
            break;
        case 2:
            break;
        case 3:
            $Adapt--;
            break;
        default:
            break;
    }
}



?>