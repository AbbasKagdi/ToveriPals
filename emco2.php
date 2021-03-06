<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Promo Mats | Toveri Pals</title>
	<meta name="description" content="Promo Mats | Toveri Pals" />
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
<div><img id="banner" class="img-fluid w-100" src="img/banners/promo.jpg" /></div>

<!-- intro text -->
<div class="my-5" id="intro">
  <div class="container-fluid">
    <!-- <h1 class="display-4 text-danger">Emco</h1> -->
	<img src="img/partners/emco.png" width="140vw">
    <p class="lead mt-2">Promotional Mats</p>
  </div>
</div>

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
                        <td>Customised Mats</td>
                        <td>July 2020</td>
                        <td><a href="static/catalogs/emco_custom.pdf" target="_blank" class="btn btn-primary btnc">Download</a></td>
                    	<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/emco_custom.png" alt="Emco Swimming Pool Grates qrcode" width="50"></abbr></a></td>
                    </tr>
                    <tr>
                        <td>Promotional Mats</td>
                        <td>2020</td>
                        <td><a href="static/catalogs/emco_promo.pdf" target="_blank" class="btn btn-primary btnc">Download</a></td>
                    	<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/emco_promo.png" alt="Emco Promotional Mats qrcode" width="50"></abbr></a></td>
                    </tr>
                    <tr>
                        <td>Premium Quality Mats</td>
                        <td>2020</td>
                        <td><a href="static/catalogs/emco_premium.pdf" target="_blank" class="btn btn-primary btnc">Download</a></td>
                    	<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/emco_premium.png" alt="Emco Premium Mats qrcode" width="50"></abbr></a></td>
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