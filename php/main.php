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
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
HTML1;
if($Type=='guest'){
    $navBarLink='#';
    $FullName = 'Guest';
}
else{
    $navBarLink='profile.php';
    $FullName = $FN." ".$LN;
}

$html1_2=<<<HTML1_2
              <a class="navbar-brand" href=$navBarLink>Hello $FullName!</a>
          </div>
        </nav>

      </div>
    </div>
     <br></br>
    
    
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
        <img src="../img/fetchLogo.png" width=15% height=15%/></h1>
              <p>Fetch is a test website intended to work in cooperation with a local animal shelter.  Dogs available for adoption will be viewable online through our database.  You can even reserve a pet and pick it up within 48 hours!</p>
              <p><a class="btn btn-lg btn-primary" href="database.php" role="button">Browse All Dogs in Shelter</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
        <img src="../img/dog1.jpeg" width=25% height=25%>
        <img src="../img/dog2.jpg" width=30% height=30%>
        <img src="../img/dog3.jpg" width=20% height=20%>
              <h1>What Kind of Dog Person are You?</h1>
              <p>Looking to adopt but don't know what bread would best fit you?  Take our questionnaire to match your personality to that of all the lovely dogs in the shelter's database.</p>
              <p><a class="btn btn-lg btn-primary" href="../html/questionnaire.html" role="button">Take the Questionnaire</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
HTML1_2;

    if(isset($_SESSION['type']) && $_SESSION['type']!='guest'){
    $html2=<<<HTML2
        <img src="../img/fetchLogo2.png" width=35% height=35%>
              <h1>Already a Member?</h1>
              <p>Any time after you have taken the questionnaire you can review your results or even retake it!  Your profile will display your last questionnaire results as well as any pets you have reserved to pick up.</p>
              <p><a class="btn btn-lg btn-primary" href="profile.php" role="button">View Your Profile</a></p>
HTML2;
    }else{
    $html2=<<<HTML2
              <h1>Still a Guest?</h1>
              <p>You can feel free to browse our database or take the questionnaire as a guest!  Unfortunately, you can't save your questionnaire results or reserve a pet without becoming a member first.</p>
              <p><a class="btn btn-lg btn-primary" href="../html/signup.html" role="button">Create an Account</a></p>
HTML2;
    }
    $html3=<<<HTML3
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    <h1 align='center'>Site Authors</h1>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../img/amandaCircle.png" width="140" height="140">
          <h2>Amanda Vincent</h2>
          <p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../img/willCircle.png" width="140" height="140">
          <h2>Will Spier</h2>
          <p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../img/zakCircle.png" width="140" height="140">
          <h2>Zak Ruppel</h2>
          <p></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

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




HTML3;

echo $html1.$html1_2.$html2.$html3;
?>