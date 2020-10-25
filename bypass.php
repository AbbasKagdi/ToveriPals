<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Authenticate | Toveri Pals</title>
	<meta name="description" content="Authenticate | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
	<meta name=”robots” content="noindex, nofollow">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
  <style>
  </style>
  </head>
<body class='scroll1 page-about'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/tree.jpg" /></div>
<!-- intro text -->
<div class="my-5" id="intro">
  <div class="container-fluid">
    <h1 class="display-4 text-theme">Authenticate</h1>
    <p class="lead">
        Enter Password to manage the dashboard. Reload page to retry.
    </p>
    <button class="btn btn-primary" onClick="window.location.reload();">Reload</button>
  </div>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>
<script>
// navigate to dashboard
$(document).ready(function(){
    var enter = prompt("Enter Password");
    if (enter != "") {
        // add token
        data = "enter="+enter;
        $.ajax({
            type: "POST",
            url: "static/scripts/bypass_dashboard.php",
            data: data,
            cache: false,
            success: function(result){
                if(result == "allow")
                    document.location.href = 'approve.php';
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
</center>
</body>
</html>