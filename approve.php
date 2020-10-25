<?php
    function banish(){
        header("Location: 404.php");
        die();
    }
    // trespasser
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!(isset($_SESSION['create'])) || !(isset($_SESSION['approve']))){
        //if(!isset($_GET['user']) || !isset($_GET['id']) ||!isset($_GET['action'])){
            // shortcuts
            $short_id = $_GET['id'];
            $short_action = $_GET['action'];
            $short_user = $_GET['user'];

            if($short_user != "hawwa")
                banish();
            
            // remove s after debugging
            if(!($short_action == "a" || $short_action == "p" || $short_action == "s"))
                banish();
            
            //   '/[1-9]\d{9}/'
            //if(!(preg_match('#[0-9]{9}#', $short_id)))
            if(!(is_numeric($short_id)))
                banish();

            // mark session if shortcut used
            // validate post id
            $range = $short_id / 100000000;
            ($range <= 1.00000001) ? banish() : (($range > 2) ? banish() : $_SESSION['shortcut'] = true);
            
        //}
    }
    $init = file_get_contents("static/blogs/log.json");
    $log = json_decode($init, true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Approve a blog | Toveri Pals</title>
	<meta name="description" content="Approve a blog | Toveri Pals" />
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
    <h1 class="display-4 text-theme">Approve a Blog</h1>
    <p class="adapt-3 lead">
        Review blogs for approval. Click on review to view a sample and proofreading. Click on approve to publish the blog to normal users. Click on purge to delete the blog.
    </p>
  </div>
</div>
<div class="container my-5 dashboard">
<table class="table table-border table-striped table-hover text-center">
    <thead>
    <th>Blog ID</th>
    <th colspan='4'>Actions</th>
    </thead>
    <tbody>
    <tr>
        <td>TEMP-<?php echo $log['pending'][0]; ?></td>
        <td><a href="feed.php?article=-<?php echo $log['pending'][0]; ?>" target="_blank" class="btn btn-info">Review</a></td>
        <td><input type="submit" class="btn btn-success" value="Approve" disabled></td>
        <td><a href="static/blogs/<?php echo $log['pending'][0]; ?>.json" class="btn btn-primary" download>Download</a></td>
        <td><a href="#" class="btn btn-danger disabled">Purge</a></td>
    </tr>
    <?php
    for($i = 1; $i < $log['pending_total']; $i++){
        $id = $log['pending'][$i];
        echo "
        <tr>
            <td>TEMP-$id</td>
            <td><a href='feed.php?article=-$id' target='_blank' class='btn btn-info'>Review</a></td>
            <td><button onclick='aprv($id)' class='btn btn-success'>Approve</button></form></td>
            <td><a href='static/blogs/$id.json' class='btn btn-primary' download>Download</a></td>
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
    <p class="lead"><a href='dashboard.php' id='dash'>Manage Dashboard.</a></p><hr>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>
<script>
// approve
function aprv(id){
    data = "id="+id;
    $.ajax({
        type: "POST",
        url: "approve_blog.php",
        data: data,
        cache: false,
        success: function(result){
            if(!result){
                alert("Fatal Error occurred");
                console.log("Fatal Error occurred");
            }
            if(result == "ok"){
                alert("Blog approved successfully!");
                console.log("Blog "+ id + " approved successfully!");
            }
            else{
                alert(result);
                console.log(result);
            }
        }
    });
    //location.reload();
}
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
            if(result == "ok"){
                alert("Blog deleted successfully!");
                console.log("Blog "+ id + " deleted successfully!");
            }
            else
                alert(result);
        }
    });
    //location.reload();
}
</script>
<?php
// trigger action is shortcut is used
if(isset($_SESSION['shortcut'])){
    // approve the post
    if($short_action == "a"){
        echo "<script>aprv($short_id)</script>";
    }
    // purge the post
    if($short_action == "p"){
        echo "<script>purge($short_id)</script>";
    }
    // display page
    if($short_action == "s"){
        echo "<script>console.log('debug');</script>";
    }
    unset($_SESSION['shortcut']);
}
?>
</center>
</body>
</html>