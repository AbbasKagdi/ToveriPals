<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sitemap | Toveri Pals</title>
	  <meta name="description" content="Sitemap | Toveri Pals" />
	  <meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
    <style>
      #link{
        cursor: pointer;
      }
    </style>
  </head>
<body class='scroll1 page-about'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/tree.jpg" /></div>
<div class="my-1 p-5" id="links">
  <div class="container" id="intro">
    <div>
      <h1 class="display-4 text-theme">Sitemap</h1>
      <p class="adapt-3 lead">Quick Links</p>
      <a href="index.php" class="btn btn-muted mx-2 my-1">Home</a>
      <a href="about.php" class="btn btn-muted mx-2 my-1">About</a>
      <a href="products.php" class="btn btn-muted mx-2 my-1">Products</a>
      <a href="feed.php" class="btn btn-muted mx-2 my-1">Feed</a>
      <a href="news.php" class="btn btn-muted mx-2 my-1">Stories</a>
      <!-- <a href="partners.php" class="btn btn-muted mx-2 my-1">Affiliates</a> -->
      <a href="gallery.php" class="btn btn-muted mx-2 my-1">Gallery</a>
      <a href="contact.php" class="btn btn-muted mx-2 my-1">Contact</a>
      <a href="sitemap.php" class="btn btn-muted mx-2 my-1">Sitemap</a>
      <a href="#" id="link" class="btn btn-muted mx-2 my-1">Admin</a>
    </div>
    <div class="my-5">
      <p class="adapt-3 lead">Catalogs</p>
      <a href="vegware.php" class="btn btn-muted mx-2 my-1">Vegware</a>
      <a href="products.php#cat2" class="btn btn-muted mx-2 my-1">Emco</a>
      <a href="handleit.php" class="btn btn-muted mx-2 my-1">Handle-iT</a>
      <a href="axp.php" class="btn btn-muted mx-2 my-1">AXP</a>
      <a href="conti.php" class="btn btn-muted mx-2 my-1">Conti+</a>
      <a href="sms.php" class="btn btn-muted mx-2 my-1">Sign Module System</a>
      <p class="mt-5 adapt-3 lead">Emco</p>
      <a href="emco1.php" class="btn btn-muted mx-2 my-1">Entrance Mats</a>
      <a href="emco2.php" class="btn btn-muted mx-2 my-1">Promotional Mats</a>
      <a href="emco3.php" class="btn btn-muted mx-2 my-1">Connexx Mats</a>
      <a href="emco4.php" class="btn btn-muted mx-2 my-1">Workplace Solutions</a>
      <a href="emco5.php" class="btn btn-muted mx-2 my-1">Swimming Pool Gratings</a>
      <a href="emco6.php" class="btn btn-muted mx-2 my-1">Novus by Emco</a>
    </div>
  </div>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>
</center>
<script>
    $('#link').click(function () {
        var enter = prompt("Enter Password");
        if (enter != "") {
            // add tokens for blog create page
            data = "enter="+enter;
            $.ajax({
                type: "POST",
                url: "static/scripts/allow_insert.php",
                data: data,
                cache: false,
                success: function(result){
                    if(result == "allow")
                        document.location.href = 'create.php';
                    else
                        alert(result);
                }
            });
        }
        else{
            alert("Please type the Password.");
        }
    });
</script>
</body>
</html>