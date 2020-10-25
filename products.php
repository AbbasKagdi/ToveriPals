<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Our Products | Toveri Pals</title>
	<meta name="description" content="Our Products | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
  <style>
    .card-img-top {
        width: 100%;
        height: 30vh;
        object-fit: cover;
    }
  </style>
  <script>
    jQuery(document).ready(function($) {
        $(".shadow5").hover(function(){
            $(this).css("border", "1px solid #ccc");
            }, function(){
            $(this).css("border", "0");
        });
    });
  </script>
  </head>
<body class='scroll1 page-products'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<div><img id="banner" class="img-fluid w-100" src="img/banners/warecut.jpg" /></div>
<!-- Product categries -->
<div class="container my-5" id="listing">
    <h1 class="display-4 text-theme" id="intro">Products</h1>
    
    <!-- Category cards -->
    <center>
    <div class="row my-5 p-1" id="partners">
        <?php include_once "type2.php"; ?>
    </div>
    </center>
</div>
<!-- Categories -->
<div class="album py-5">
    <div class="container">
        <!-- first row -->
        <div class="row mb-5" id="cat1">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Sustainable Customized Food Packaging</h3>
                <div class="d-md-none">    
                    <i class="fa fa-square"></i>
                    <a href="#cat2"><i class="fa fa-square-o"></i></a>
                    <a href="#cat3"><i class="fa fa-square-o"></i></a>
                    <a href="#cat4"><i class="fa fa-square-o"></i></a>
                    <a href="#cat5"><i class="fa fa-square-o"></i></a>
                    <a href="#cat6"><i class="fa fa-square-o"></i></a>
                </div>
                <hr class="bg-success">
            </div>
            <!-- first in first row -->
            <!-- Vegware -->
            <div class="col-md-4" id="pa1">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/vegprop.jpg" loading="lazy" alt="Vegware">
                    <div class="card-body">
                        <h4 class="card-text">Vegware</h4>
                        <p class="card-text text-success small">
                            Specialized in plant-based compostable foodservice packaging.
                        </p>
                        <a href="https://www.vegware.com/uk/" target="_blank" class="mb-1 btn btn-success">Visit</a>
                        <a href="vegware.php" target="_blank" class="mb-1 btn border-success"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
        <!-- End of first row -->
        </div>
        <!-- Second row -->
        <div class="row mb-5" id="cat2">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Range of Emco Products and Accessories</h3>
                <div class="d-md-none"> 
                    <a href="#cat1"><i class="fa fa-square-o"></i></a>
                    <i class="fa fa-square"></i>
                    <a href="#cat3"><i class="fa fa-square-o"></i></a>
                    <a href="#cat4"><i class="fa fa-square-o"></i></a>
                    <a href="#cat5"><i class="fa fa-square-o"></i></a>
                    <a href="#cat6"><i class="fa fa-square-o"></i></a>
                </div>
                <hr class="bg-danger">
            </div>
            <!-- first in second row-->
            <!-- Entrance Mats -->
            <div class="col-md-4" id="pb1">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/emco.jpg" loading="lazy" alt="Entrance Mats">
                    <div class="card-body">
                        <h4 class="card-text">Entrance Mats</h4>
                        <p class="card-text text-danger small">
                            Mats ideal for trapping low-level dirt and moisture.
                        </p>
                        <a href="https://www.emco-bau.com/en/" target="_blank" class="mb-1 btn btn-danger">Visit</a>
                        <a href="emco1.php" target="_blank" class="mb-1 btn border-danger"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
            <!-- second in second row-->
            <!-- Promotional Mats -->
            <div class="col-md-4" id="pb2">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/fit.jpg" loading="lazy" alt="Promotional Mats">
                    <div class="card-body">
                        <h4 class="card-text">Promotional Mats</h4>
                        <p class="card-text text-danger small">
                            Logo mats to highlight your brand indoors or outdoors.
                        </p>
                        <a href="https://www.emco-bau.com/en/products/carpet-mats/" target="_blank" class="mb-1 btn btn-danger">Visit</a>
                        <a href="emco2.php" target="_blank" class="mb-1 btn border-danger"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
            <!-- third in second row-->
            <!-- Connexx Mats -->
            <div class="col-md-4" id="pb3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/conx.jpg" loading="lazy" alt="Connexx Mats">
                    <div class="card-body">
                        <h4 class="card-text">Connexx Mats</h4>
                        <p class="card-text text-danger small">
                            Modular entrance tile matting system with easy install and minimal waste.
                        </p>
                        <a href="https://www.emco-bau.com/en/products/special-solutions-for-entrance-mats/prv/connexx-connect-with-focus-f-insert-connect-17-f/" target="_blank" class="mb-1 btn mb-1 btn-danger">Visit</a>
                        <a href="emco3.php" target="_blank" class="mb-1 btn border-danger"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
            <!-- fourth in second row-->
            <!-- Workplace solutions -->
            <div class="col-md-4" id="pb4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/office.png" loading="lazy" alt="Workplace solutions">
                    <div class="card-body">
                        <h4 class="card-text">Workplace Solutions</h4>
                        <p class="card-text text-danger small">
                            Modern office accessories.
                        </p>
                        <a href="https://www.emco-group.de/en/the-brands/worklife.html" target="_blank" class="mb-1 btn btn-danger">Visit</a>
                        <a href="emco4.php" target="_blank" class="mb-1 btn border-danger"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
            <!-- fifth in second row-->
            <!-- Swimming Pool Gratings -->
            <div class="col-md-4" id="pb5">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/swim.jpg" loading="lazy" alt="Swimming Pool Gratings">
                    <div class="card-body">
                        <h4 class="card-text">Swimming Pool Gratings</h4>
                        <p class="card-text text-danger small">
                            Gratings for modern pools.
                        </p>
                        <a href="https://www.emco-bau.com/en/products/swimming-pool-grates/" target="_blank" class="mb-1 btn btn-danger">Visit</a>
                        <a href="emco5.php" target="_blank" class="mb-1 btn border-danger"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
            <!-- sixth in second row-->
            <!-- Novus by Emco -->
            <div class="col-md-4" id="pb6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/monitor.jpg" loading="lazy" alt="Worklife Expert Solutions">
                    <div class="card-body">
                        <h4 class="card-text">Novus by Emco</h4>
                        <p class="card-text text-danger small">
                            Worklife expert solutions.
                        </p>
                        <a href="https://www.novus-more-space-system.com/en.html" target="_blank" class="mb-1 btn btn-danger">Visit</a>
                        <a href="emco6.php" target="_blank" class="mb-1 btn border-danger"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
        <!-- end of second row -->
        </div>
        <!-- third row -->
        <div class="row mb-5" id="cat3">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Industry Specific Handling Solutions</h3>
                <div class="d-md-none"> 
                    <a href="#cat1"><i class="fa fa-square-o"></i></a>
                    <a href="#cat2"><i class="fa fa-square-o"></i></a>
                    <i class="fa fa-square"></i>
                    <a href="#cat4"><i class="fa fa-square-o"></i></a>
                    <a href="#cat5"><i class="fa fa-square-o"></i></a>
                    <a href="#cat6"><i class="fa fa-square-o"></i></a>
                </div>
                <hr class="bg-warning">
            </div>
            <!-- first in third row -->
            <!-- Handle-it -->
            <div class="col-md-4" id="pc1">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/handleit.png" loading="lazy" alt="Handle-IT">
                    <div class="card-body">
                        <h4 class="card-text">Handle-iT</h4>
                        <p class="card-text text-warning small">
                            Floor mounted safety, dock, & packaging equipment for industrial requirements.
                        </p>
                        <a href="https://handle-it.com/" target="_blank" class="mb-1 btn btn-warning">Visit</a>
                        <a href="handleit.php" target="_blank" class="mb-1 btn border-warning"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
        <!-- End of third row -->
        </div>
        <!-- fourth row -->
        <div class="row mb-5" id="cat4">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Engineered Solutions for Indoor Air Quality</h3>
                <div class="d-md-none"> 
                    <a href="#cat1"><i class="fa fa-square-o"></i></a>
                    <a href="#cat2"><i class="fa fa-square-o"></i></a>
                    <a href="#cat3"><i class="fa fa-square-o"></i></a>
                    <i class="fa fa-square"></i>
                    <a href="#cat5"><i class="fa fa-square-o"></i></a>
                    <a href="#cat6"><i class="fa fa-square-o"></i></a>
                </div>
                <hr class="bg-info">
            </div>
            <!-- first in fourth row -->
            <!-- AXP -->
            <div class="col-md-4" id="pd1">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/axpp.png" loading="lazy" alt="AXP">
                    <div class="card-body">
                        <h4 class="card-text">AXP</h4>
                        <p class="card-text text-info small">
                            Decentralised air purifiers for smoking rooms.
                        </p>
                        <a href="https://www.extremeairproducts.com/" target="_blank" class="mb-1 btn btn-info">Visit</a>
                        <a href="axp.php" target="_blank" class="mb-1 btn border-info"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
        <!-- End of fourth row -->
        </div>
        <!-- fifth row -->
        <div class="row mb-5" id="cat5">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Shower and Washroom Solutions</h3>
                <div class="d-md-none"> 
                    <a href="#cat1"><i class="fa fa-square-o"></i></a>
                    <a href="#cat2"><i class="fa fa-square-o"></i></a>
                    <a href="#cat3"><i class="fa fa-square-o"></i></a>
                    <a href="#cat4"><i class="fa fa-square-o"></i></a>
                    <i class="fa fa-square"></i>
                    <a href="#cat6"><i class="fa fa-square-o"></i></a>
                </div>
                <hr class="bg-primary">
            </div>
            <!-- first in fifth row -->
            <!-- Conti -->
            <div class="col-md-4" id="pe1">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/conti.jpg" loading="lazy" alt="Washroom solutions">
                    <div class="card-body">
                        <h4 class="card-text">Conti Plus</h4>
                        <p class="card-text text-primary small">
                            High quality washroom accessories.
                        </p>
                        <a href="https://conti.plus/en/site/index" target="_blank" class="mb-1 btn btn-primary">Visit</a>
                        <a href="conti.php" target="_blank" class="mb-1 btn border-primary"><small>Download our latest catalog</small></a>
                    </div>
                </div>
            </div>
        <!-- End of fifth row -->
        </div>
        <!-- fifth row -->
        <div class="row mb-5" id="cat6">
            <!-- Category Declaration -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">Road Technology Infrastructure and Furniture</h3>
                <div class="d-md-none"> 
                    <a href="#cat1"><i class="fa fa-square-o"></i></a>
                    <a href="#cat2"><i class="fa fa-square-o"></i></a>
                    <a href="#cat3"><i class="fa fa-square-o"></i></a>
                    <a href="#cat4"><i class="fa fa-square-o"></i></a>
                    <a href="#cat5"><i class="fa fa-square-o"></i></a>
                    <i class="fa fa-square"></i>
                </div>
                <hr class="bg-secondary">
            </div>
            <!-- first in sixth row -->
            <!-- SMS -->
            <div class="col-md-4" id="pf1">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/products/smods.jpg" loading="lazy" alt="Sign Module System">
                    <div class="card-body">
                        <h4 class="card-text">Sign Module System</h4>
                        <p class="card-text text-secondary small">
                            Road Technology Infrastructure and Furniture
                        </p>
                        <a href="https://smodule.me/" target="_blank" class="mb-1 btn btn-secondary">Visit</a>
                        <a href="sms.php" target="_blank" class="mb-1 btn border-secondary">Explore</a>
                    </div>
                </div>
            </div>
        <!-- End of sixth row -->
        </div>
    <!-- End of container div -->
    </div>
<!-- End of categories -->
</div>
<!-- brands image -->
<!--
<div class="container mb-4">
    <img class="img-responsive" width="75%" src="img/brands.jpg">
</div>
-->
<!-- Footer -->
<?php include_once "footer.php"; ?>
</center>
</body>
</html>