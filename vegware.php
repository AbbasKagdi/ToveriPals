<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegware | Toveri Pals</title>
	<meta name="description" content="Vegware | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
    <script src="static/scripts/btn.js"></script>
  </head>
<body class='scroll1 page-products'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/veg.jpg" /></div>
<!-- intro text -->
<div class="my-5" id="intro">
  <div class="container-fluid">
    <!-- <h1 class="display-4 text-theme">Vegware</h1> -->
	<img src="img/partners/vegware.png" width="250vw">
    <p class="lead mt-2">Discover the range of vegware packaging</p>
  </div>
</div>
<!-- Intro video -->
<!-- <div class="container my-5">
    <iframe width="100%" height="624" src="https://www.youtube.com/embed/hO3xidfuxJk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->
<!-- Categories -->
<div class="album pb-5">
    <div class="container">
        <div class="mb-5">
            <!-- Packaging -->
            <div class="col-md-12 text-left">
                <h3 class="display-5">List of Catalogs</h3>
            </div>
			<div class="table-responsive-md">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<th>Catalog</th>
						<th>Date</th>
						<th>Link</th>
						<th class="d-none d-md-table-cell">QR Code</th>
					</thead>
					<tbody>
						<tr>
							<td>Bon Appetit Bowls</td>
							<td>October 2020</td>
							<td><a href="static/catalogs/vegware_bowls.pdf" class="btn btn-primary btnc">Download</a></td>
							<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/vegware_bowls.png" alt="Vegware Bon Appetit Bowls qrcode" width="50"></abbr></a></td>
						</tr>
						<tr>
							<td>Festive cups by Vegware 2020</td>
							<td>October 2020</td>
							<td><a href="static/catalogs/vegware_festive.pdf" class="btn btn-primary btnc">Download</a></td>
							<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/vegware_festive.png" alt="Vegware Festive cups qrcode" width="50"></abbr></a></td>
						</tr>
						<tr>
							<td>Guide to ECO Packaging for socially distanced catering</td>
							<td>July 2020</td>
							<td><a href="static/catalogs/vegware_back.pdf" target="_blank" class="btn btn-primary btnc">Download</a></td>
							<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/vegware_back.png" alt="Vegware ECO Packaging qrcode" width="50"></abbr></a></td>
						</tr>
						<tr>
							<td>Sustainable Packaging</td>
							<td>2020</td>
							<td><a href="static/catalogs/vegware_all.pdf" target="_blank" class="btn btn-primary btnc">Download</a></td>
							<td class="d-none d-md-table-cell"><a class="pop"><abbr title="click here to scan code"><img src="static/catalogs/vegware_all.png" alt="Vegware Sustainable Packaging qrcode" width="50"></abbr></a></td>
						</tr>
					</tbody>
				</table>
			</div>
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