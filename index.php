<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E3cube</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="img-responsive" src="images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/Image1r.jpg');"></div>
                <div class="carousel-caption black">
                    <h1>Balanced to perfection</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Image2r.jpg');"></div>
                <div class="carousel-caption white">
                    <h1>Employers demand workplace teaching environments</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Image3r.jpg');"></div>
                <div class="carousel-caption black">
                    <h1>Solidarity in design </h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Image4r.jpg');"></div>
                <div class="carousel-caption white">
                    <h1>At home in its setting</h1>
                </div>
            </div>
             <div class="item">
                <div class="fill" style="background-image:url('images/Image5r.jpg');"></div>
                <div class="carousel-caption black">
                    <h1>Inspired learning</h1>
                </div>
            </div>
        </div>
    </header>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-5 col-md-5 col-lg-5 block-item no-padding light-background">
      <div class="dummy dummy-special" style="padding-top: 80%"></div>
        <div class="grid-container">
          <a href="" class="full-div-link"></a>
          <h1 class="padding-20-0-0-50">ABOUT US</h1>
          <p class="padding-20-0-0-50">E3 Cube is a specialist property consultancy. At the core of our success you will find our people.</p>
          <p class="padding-left-50">Our focus is on providing quality, tailor-made services to each and every client.</p>
          <p class="padding-left-50 hidden-mobile-p">We are passionate and imaginative in our approach, adding value to every project. </p>
        </div>
    </div>
    <div class="col-xs-7 col-md-7 col-lg-7 no-padding block-item">
      <div class="dummy" style="padding-top:57.1%"></div>
        <div class="grid-container">
          <a href="" class="full-div-link"></a>
          <h2 class="image-title">ACCRINGTON &amp; ROSSENDALE COLLEGE NEW SPORTS CENTRE</h2>
          <img class="full-width-image"src="images/Image_A.jpg">
        </div>
    </div>
    <div class="col-md-6 col-xs-6 light-background">
      <div class="dummy" style="padding-top:57.1%"></div>
        <div class="grid-container">
          <a href="" class="full-div-link"></a>
          <h2 class="image-title">CHRISTLETON HIGH SCHOOL CLADDING RENEWAL</h2>
          <img class="full-width-image"src="images/ImageB.jpg">
        </div>
    </div>
    <div class="col-md-6 col-xs-6 light-background">
      <div class="dummy" style="padding-top: 57.1%"></div>
      <a href="" class="full-div-link"></a>
    </div>
  </div>
</div>  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
  </body>
</html>