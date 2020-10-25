<?php define('read_defs', TRUE); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Module System | Toveri Pals</title>
	<meta name="description" content="Sign Module System | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Load Headers-->
    <?php require_once "headers.php"; ?>
    <script src="static/scripts/btn.js"></script>
    <style>
        .card-img-top {
            width: 100%;
            height: 30vh;
            object-fit: cover;
        }
    </style>
  </head>
<body class='scroll1 page-products'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>

<div><img id="banner" class="img-fluid w-100" src="img/banners/smspanel2.jpg" /></div>

<!-- intro text -->
<div class="mt-5" id="intro">
  <div class="container-fluid">
    <!-- <h1 class="display-4 text-theme">Sign Module System</h1> -->
	<img src="img/partners/sms.png" width="240vw">
    <p class="lead mt-2">
        Wayfinding and Road Safety Experts.
    </p>
  </div>
</div>


<!-- Categories -->
<div class="album py-5">
    <div class="container">
        <div class="row mb-5">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Road Technology Infrastructure and Furniture</h3>
                <hr class="bg-secondary">
            </div>
            <?php
                require_once "defs.php";
                // skip previous products in loop
                for ($i=4; $i< 16; $i++) {
                echo "
                    <!-- ".($i + 1)." in fourth row -->
                    <!-- ".$company[$i]." -->
                    <div class='col-md-4' id='pe".($i - 3)."'>
                        <div class='card mb-4 box-shadow'>
                            <img class='card-img-top' src='img/products/".$img[$i]."' loading='lazy' alt='".$company[$i]."'>
                            <div class='card-body d-flex flex-column'>
                                <h4 class='card-text'>".$company[$i]."</h4>
                                <p class='card-text text-secondary small'>
                                    ".$desc[$i]."
                                </p>
                                <a href='".$website[$i]."' target='_blank' class='btn btn-secondary btnc'>Visit</a>
                                <!--<a href='#' target='_blank' class='btn border-secondary mt-auto'>Download our latest catalogue</a>-->
                            </div>
                        </div>
                    </div>
                ";}
            ?>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>

</center>
</body>
</html>