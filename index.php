<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Toveri Pals</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Home | Welcome to Toveri Pals" />
    <meta name="author" content="Abbas Kagdi">
    <meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <meta name="theme-color" content="#000">
    <link rel="icon" href="img/logo.png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" type="06876d87f4710a48b1fc7f8d-text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="static/styles/style.css">
    <link rel="stylesheet" href="static/styles/index-style.css">
    <link rel="stylesheet" href="static/styles/social.css">

    <style>
    </style>
  </head>
<body class='scroll1 page-home'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>

<!-- front section -->
<section class="jumbotron text-center mb-0" style="background-image: url('img/banners/kwt.jpg'); height: 100vh; background-position:inherit;" id="front">
    <div class="container" id="intro">
        <p class="lead text-white" style="margin-top: 40vh;"><b>Welcome to</b></p>
        <h1 class="jumbotron-heading text-white display-4"><b>Toveri Pals</b></h1>
        <p><a href="#about" class="btn border-white"><i class="text-white fa fa-angle-double-down"></i></a></p>
    </div>
</section>

<!-- intro div -->
<div class="px-5 py-5" id="about">
    <h1 class="my-4"></h1>
    <div class="col-lg-6 col-md-12 col-sm-12">
        <img src="img/logo.png" alt="logo" class="my-1" height="150wh">
		<p class="my-4 lead">
            <a href="about.php" style="font-size:1.2em" target="_blank"><b><font color="#ec7404">Toveri</font> <font color="#2d038a">Pals</font></b></a> General Trading Company is specialized in introducing and marketing international brands to the MENA region through their HQ offices in Kuwait, representing international leading manufacturers and suppliers offering high quality, cost effective and innovative services/solutions that enhance customer value across their respective industries.
            <small><a href="about.php" class="text-theme">Read More <i class="fa fa-arrow-right"></i></a></small>
        </p>
    </div>
    <div class="my-4 col-lg-6 col-md-12 col-sm-12 collapse">
        <td><a href="about.php#mission"><span class="px-2 border-dark">Mission</span></a></td>
        <td><a href="about.php#vision"><span class="px-2 border-primary">Vision</span></a></td>
        <td><a href="about.php#promise"><span class="px-2 border-info">Promise</span></a></td>
    </div>
</div>

<!-- Product cards -->
<div class="container">
    <h1 class="display-5"></h1>
    <p class="adapt lead">Visit our <a href="products.php"><i class="text-primary"><big><big>Product page</big></big></i></a> to explore our entire range of products.</p>
    <div class="row container my-5" id="partners">
        <div class="card-deck text-left">
            <div class="card border-success shadow5">
                <img class="card-img-top" src="img/export/veg.png" loading="lazy" alt="Vegware">
                <div class="card-body d-flex flex-column">
                <h5 class="card-title">Vegware</h5>
                <p class="card-text"><i class="text-success">Sustainable Customized Food Packaging</i></p>
                <a href="products.php#cat1" class="btn btn-success mt-auto w-25" target="_blank">Visit</a>
                </div>
            </div>
            <div class="card border-danger shadow5">
                <img class="card-img-top" src="img/export/emco.png" loading="lazy" alt="Emco Mats">
                <div class="card-body d-flex flex-column">
                <h5 class="card-title">Emco</h5>
                <p class="card-text"><i class="text-danger">Promotional and Practical Carpet Mats</i></p>
                <a href="products.php#cat2" class="btn btn-danger mt-auto w-25" target="_blank">Visit</a>
                </div>
            </div>
            <div class="card border-warning shadow5">
                <img class="card-img-top" src="img/export/handle.png" loading="lazy" alt="Handle-iT">
                <div class="card-body d-flex flex-column">
                <h5 class="card-title">Handle-iT</h5>
                <p class="card-text"><i class="text-warning">Industry-specific handling solutions</i></p>
                <a href="products.php#cat3" class="btn btn-warning mt-auto w-25" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- thumbnails -->
<div class="container-fluid text-center row mt-5">
    <a href="products.php">
        <marquee behavior="scroll" direction="left" scrollamount="7" width="100%" class="overflow-auto" onmouseover="this.stop();" onmouseout="this.start();">
        <?php
            $company = array("vegware", "emco", "handleit", "axp", "connexx", "retention", "panacor", "varley", "olga", "rey", "marcal", "zippole", "kisan", "tecnivial", "sernis", "kosedag", "gonvarri");
            // nudge height to adjust logo visibility
            $height = array(60,50,50,70,40,40,60,70,80,50,60,60,60,60,40,40,80);
            for($i=0; $i<17; $i++){
            //    echo "<div class='col-lg-1 col-md-2 col-sm-4 col-xs-6'><img width='100vh' src='img/partners/".$company[$i].".png' class='rounded' alt='".$company[$i]."'></div>";
                echo "<img height='".$height[$i]."vh' src='img/partners/".$company[$i].".png' class='mx-5 rounded' loading='lazy' alt='".$company[$i]."'>";
            }
        ?>
        </marquee>
    </a>
</div>

<!-- social platforms -->
<div class="row digital border mt-5 p-5 row">
    <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-lg-4 offset-lg-8 text-dark">
        <font color="#fff">
            <h1 style="margin-top: 18vh;" class="text-white">We're Social</h1>
            <p class="adapt lead text-white">Let's get in touch.</p>
        </font>
        <div class="my-3 container row justify-content-center" style="zoom:0.8">
            <a href="https://www.linkedin.com/company/toveri-pals/" class="mx-1 la la-linkedin fa fa-linkedin"></a>
            <a href="https://twitter.com/ToveriPals" class="mx-1 la la-twitter fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UCFkpDJKUQWWIih36Cg4rOMg" class="mx-1 la la-youtube fa fa-youtube-play"></a>
            <a href="https://www.facebook.com/Toveri-Pals-100678328346402/" class="mx-1 la la-facebook fa fa-facebook"></a>
            <a href="https://www.instagram.com/toveripals/" class="mx-1 la la-instagram fa fa-instagram"></a>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>
</center>
<!-- fast load -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>