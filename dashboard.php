<?php
    // trespasser
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
    if(!(isset($_SESSION['create'])) || !(isset($_SESSION['approve']))){
        header("Location: 404.php");
        die();
    }
    $init = file_get_contents("static/blogs/log.json");
    $log = json_decode($init, true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard | Toveri Pals</title>
	<meta name="description" content="Dashboard | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
	<style>
		.dashboard{
            position: relative;
            overflow: auto;
        }
	</style>
</head>
<body class='scroll1 page-admin'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/lapt.jpg" /></div>
<!-- intro text -->
<div class="my-5 text-center" id="intro">
  <div class="container">
    <h1 class="display-4 text-theme">Dashboard</h1>
    <p class="adapt-3 lead">
        Review blogs for approval. Click on review to view a published blog. Click on purge to delete a blog.
    </p>
  </div>
</div>
<div class="container my-5 dashboard">
<table class="table table-border table-striped table-hover text-center">
    <thead>
    <th>Blog ID</th>
    <th colspan='2'>Actions</th>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $log['posts'][0]; ?></td>
        <td><a href="feed.php?article=-<?php echo $log['posts'][0]; ?>" target="_blank" class="btn btn-info">Review</a></td>
        <td><input type="submit" class="btn btn-danger" value="Purge" disabled></td>
    </tr>
    <?php
    for($i = 1; $i < $log['total']; $i++){
        $id = $log['posts'][$i];
        echo "
        <tr>
            <td>$id</td>
            <td><a href='feed.php?article=-$id' target='_blank' class='btn btn-info'>Review</a></td>
            <td><button onclick='purge($id)' class='btn btn-danger'>Purge</button></td>
        </tr>
        ";
    }
    ?>
    </tbody>
</table>
</div>
<div class="my-5">
    <hr>
    <p class='lead'><a href='create.php' id='cr8'>Create Blog.</a></p><hr>
    <p class="lead"><a href='approve.php' id='mod'>Approve Blog.</a></p><hr>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>
<script>
// purge
function purge(id){
    data = "id="+id;
    $.ajax({
        type: "POST",
        url: "delete_blog.php",
        data: data,
        cache: false,
        success: function(result){
            if(!result)
                alert("Fatal Error occurred");
            if(result == "ok")
                alert("Blog deleted successfully!");
            else
                alert(result);
        }
    });
    location.reload();
}
</script>
</center>
</body>
</html>