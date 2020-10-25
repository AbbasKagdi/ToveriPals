<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AXP | Toveri Pals</title>
	<meta name="description" content="AXP | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
    <script src="static/scripts/btn.js"></script>
  <style>
  </style>
  </head>
<body class='scroll1 page-products'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/cabin.jpg" /></div>
<!-- intro text -->
<div class="my-5" id="intro">
  <div class="container-fluid">
    <!-- <h1 class="display-4 text-theme">AXP</h1> -->
    <img src="img/partners/axp.png" width="120vw">
    <p class="lead">We care about clean air.</p>
  </div>
</div>
<!-- Intro video -->
<!-- <div class="container my-5">
    <iframe width="100%" height="624" src="https://www.youtube.com/embed/Pd92Vh4mPx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->
<!-- Categories -->
<div class="album pb-5">
    <div class="container">
        <div class="mb-5">
            <!-- Packaging -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">List of Catalogs</h3>
            </div>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <th>Catalog</th>
                    <th>Date</th>
                    <th>Link</th>
                	<th class="d-none d-md-table-cell">QR Code</th>
                </thead>
                <tbody>
                    <tr>
                        <td>AXP Introduction</td>
                        <td>2020</td>
                        <td><a href="static/catalogs/axp_c.pdf" target="_blank" class="btn btn-primary btnc">Download</a></td>
                    	<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/axp_c.png" alt="AXP Intro qrcode" width="50"></abbr></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<?php include_once "static/scripts/qr.php"; ?>

<!-- Footer -->
<?php include_once "footer.php"; ?>
</center>
</body>
</html>