<?php
session_start();

if(isset($_SESSION['fn'])){
    $FN = $_SESSION['fn'];
}
if(isset($_SESSION['ln'])){
    $LN = $_SESSION['ln'];
}

$con = new mysqli('65.183.130.64','user1','F0n%3','testusers');

$sql = "SELECT * FROM Dogs";
$result= $con->query($sql);

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
    
    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
HTML1;

$iter=0;
$carouselnav="";
foreach($result as $dog){
    if($iter==0) $carouselnav.= '<li data-target="#myCarousel" data-slide-to="'.$iter.'" class="active"></li>';
    else $carouselnav.= '<li data-target="#myCarousel" data-slide-to="'.$iter.'" class="inactive"></li>';
    $iter++;
}
$carouselouter=<<<CAROUSELOUTER
        </ol>
        <div class="carousel-inner" role="listbox">
CAROUSELOUTER;


$iter=0;
$carouselpages="";
foreach($result as $dog){
    if($iter==0) $active='<div class="item active">';
    else $active='<div class="item">';
    $name = $dog['name'];
    $breed = $dog['breed'];
    $img = $dog['image'];
    $page="";
    $page.=$active;
    $page.=<<<PAGE
    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Slide $iter">
          <div class="container">
            <div class="carousel-caption">
              <img src=$img width=25% height=25%/>
              <h1>Meet $name the $breed!</h1>
              
            <div class="container" style="width: 200px">
                <form action="../html/reserve.html"">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Reserve!</button>
                </form>
            </div>
            
            </div>
          </div>
        </div>
PAGE;
    $carouselpages.=$page;
    $iter++;
}
$html2=<<<HTML2
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

echo $html1.$carouselnav.$carouselouter.$carouselpages.$html2;
?>