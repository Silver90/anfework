<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ice cream</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">

    <!--Font awesome per icone footer-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--foglio di stile-->
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include("header.php"); ?>
<br> <br> <br> <br> <br> <br> <br> <br>
<br>
<!-- slider carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Prima immagine -->
            <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
            <div class="carousel-caption">
                <h2>Ingredienti unici</h2>
            </div>
        </div>
        <div class="item">
            <!-- Seconda immagine -->
            <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
            <div class="carousel-caption">
                <h2>Vasta scelta</h2>
            </div>
        </div>
        <div class="item">
            <!-- Terza immagine -->
            <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
            <div class="carousel-caption">
                <h2>Solo il meglio del gelato</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div id="container">

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
</div>


<div>
    <br> <br> <br> <br> <br> <br> <br> <br>
    <?php include("news.php"); ?>
</div>


<?php include("footer.html"); ?>

</body>

</html>
