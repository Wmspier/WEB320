<?php
session_start();

if(isset($_SESSION['fn'])){
    $FN = $_SESSION['fn'];
}
if(isset($_SESSION['ln'])){
    $LN = $_SESSION['ln'];
}
if(isset($_SESSION['type'])){
    $Type = $_SESSION['type'];
}
if(isset($_SESSION['email'])){
    $Email = $_SESSION['email'];
}
if(isset($_SESSION['address'])){
    $Address = $_SESSION['address'];
}
if(isset($_SESSION['city'])){
    $City = $_SESSION['city'];
}
if(isset($_SESSION['state'])){
    $State = $_SESSION['state'];
}
if(isset($_SESSION['zip'])){
    $Zip = $_SESSION['zip'];
}
if(isset($_SESSION['phone'])){
    $Phone = $_SESSION['phone'];
}
if(isset($_SESSION['userAdapt'])){
    $Adapt = $_SESSION['userAdapt'];
}
if(isset($_SESSION['userFriendly'])){
    $Friendly = $_SESSION['userFriendly'];
}
if(isset($_SESSION['userNeeds'])){
    $Needs = $_SESSION['userNeeds'];
}
if(isset($_SESSION['userTrain'])){
    $Train = $_SESSION['userTrain'];
}
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
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
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="main.php">Home</a>
              <a class="navbar-brand" href="signout.php">Sign Out</a>
          </div>
        </nav>

      </div>
    </div>
    <br></br>
    <br></br>
    <br></br>
    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img align='center' class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <br>
            <h2 align='left'>Name: $FN $LN</h2>
            <h2 align='left'>Email: $Email</h2>
            <h2 align='left'>Account Type: $Type</h2>
HTML1;

if($Type=='user'){
    
$html1_2=<<<HTML1_2
            <h2 align='left'>Address: $Address</h2>
            <h2 align='left'>City: $City</h2>
            <h2 align='left'>State: $State</h2>
            <h2 align='left'>Zipcode: $Zip</h2>
            <h2 align='left'>Phone: $Phone</h2>
            <p></p>
        </div><!-- /.col-lg-4 -->
HTML1_2;

if($Adapt>=0){
$html1_3=<<<HTML1_3
        <div class="col-lg-4">
          <img align='center' class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2 align='left'>Previous Questionnaire Results</h2>
            <h2 align='left'>Adaptability: $Adapt</h2>
            <h2 align='left'>Friendliness: $Friendly</h2>
            <h2 align='left'>Needs: $Needs</h2>
            <h2 align='left'>Trainability: $Train</h2>
            <p></p>
        </div><!-- /.col-lg-4 -->
HTML1_3;
}else $html1_3="";
    

}else $html1_2=$html1_3="";


$html2=<<<HTML2
          <p></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    
    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to Fetch!
        <img src="fetchLogo.png" width=15% height=15%/></h1>
              <p>Fetch is a test website intended to work in cooperation with a local animal shelter.  Dogs available for adoption will be viewable online through our database.  You can even reserve a pet and pick it up within 48 hours!</p>
              <p><a class="btn btn-lg btn-primary" href="database.php" role="button">Browse All Dogs in Shelter</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
        <img src="img/dog1.jpeg" width=25% height=25%>
        <img src="img/dog2.jpg" width=30% height=30%>
        <img src="img/dog3.jpg" width=20% height=20%>
              <h1>What Kind of Dog Person are You?</h1>
              <p>Looking to adopt but don't know what bread would best fit you?  Take our questionnaire to match your personality to that of all the lovely dogs in the shelter's database.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Take the Questionnaire</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
HTML2;

$html3 = <<< HTML3
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      </ol>
HTML3;

$html4=<<<HTML4
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>
        <img src="fetchLogo.png" width=25% height=25%/></h1>
              <h2>Welcome to the Fetch Database!</h2>  <p>Scroll right to see all dogs currently available at the shelter.</p>
            </div>
          </div>
    </div><!-- /.carousel -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
HTML4;

echo $html1.$html1_2.$html1_3.$html2.$html3.$html4;
?>