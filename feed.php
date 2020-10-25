<?php

    if(isset($_GET['article'])){
		$bid = explode("-", $_GET['article']);
		$bid = end($bid);
		$bid = (is_numeric($bid)) ? $bid : 100001;
    }
	else{
		$bid = 100001;
	}
	try{
		$log = json_decode(file_get_contents("static/blogs/log.json"), true);
		// search in posts
		if(in_array($bid, $log['posts'])){
			$blog = json_decode(file_get_contents("static/blogs/". $bid .".json"), true);
		}
		// search in pending posts
		elseif(in_array($bid, $log['pending'])){
			$blog = json_decode(file_get_contents("static/blogs/". $bid .".json"), true);
		}
		// redirect for invalid post id
		else{
			header("Location: 404.php");
			die();
		}
		// save memory
		unset($log);
    }
    // redirect for invalid post id
    catch(Exception $e) {
        // for unknown exception
		header("Location: 404.php");
		die();
    }

    function get_badge($color){
        switch($color){
            case 'launch': return "<span class='mx-1 badge badge-info'>Launch</span>";
            case 'bussiness': return "<span class='mx-1 badge badge-warning'>Bussiness</span>";
            case 'challenge': return "<span class='mx-1 badge badge-dark'>Challenge</span>";
            case 'case': return "<span class='mx-1 badge badge-secondary'>Case Study</span>";
            case 'alert': return "<span class='mx-1 badge badge-danger'>Alert</span>";
            case 'tech': return "<span class='mx-1 badge badge-primary'>Tech</span>";
            case 'environment': return "<span class='mx-1 badge badge-success'>Environment</span>";
            default: return "";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo($blog['title']); ?> | Toveri Pals</title>
	<meta name="description" content="Latest Updates | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
	<link rel="canonical" href="https://toveripals.com/feed.php">
    <!-- Load Headers-->
    <?php include_once "headers.php"; ?>
    <style>
    p{
        text-overflow: ellipsis; 
    }
    .twitter-share-button[style]{
        vertical-align: text-bottom !important;
        margin-bottom: -1px;
    }
    </style>
  </head>
<body class='scroll1 page-news'>
<!-- load facebook plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>   
<!-- load twitter plugin -->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>

<div><img id="banner" class="img-fluid w-100" src="img/blogs/<?php echo $blog['image']; ?>" /></div>

<!-- intro text -->
<div class="mt-5" id="intro">
  <div class="container-fluid">
    <?php if($bid > 100000000){echo("<p class='bg-danger container p-3 lead'>This post is not yet approved by the content moderator.</p>");} ?>
    <h1 class="display-4 text-theme"><?php echo $blog['title']; ?></h1>
    <p class="lead">
        <?php echo wordwrap($blog['subtitle'], 15); ?>
    </p>
  </div>
</div>

<!-- Content -->
<div class="row mb-5 container bg-light p-1" style="font-size: 1.2em">
    <div class="col-md-8 p-5 border-right" id="content">
        <p class="text-left"><?php echo wordwrap($blog['content'], 15); ?></p>
        <!-- share buttons hidden if post is not approved -->
        <div class="container-fluid text-left <?php if($bid > 100000000){ echo('collapse'); } ?>">
            <!-- fb share button -->
            <?php $curr_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
            <div class="fb-share-button" data-href="<?php echo($curr_url); ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
            <!-- twitter share button -->
            <a class="twitter-share-button" href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-text="<?php echo $blog['title']; ?>" data-size="small" data-show-count="false">Tweet</a>
            <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
            <script type="IN/Share" data-url="<?php echo($curr_url); ?>"></script>
        </div>
    </div>
    <div class="col-md-4 float-left p-5">
        <h6>Published on</h6>
        <p class="lead"><?php echo $blog['date']; ?></p>
        <h6>Author</h6>
        <p class="lead"><?php echo "". ucfirst($blog['author']) ."<br><small>". $blog['description'] ."</small>"; ?></p>
        <h6>Tags</h6>
        <?php
            $k = 0;
            foreach($blog['badges'] as $b){
                echo get_badge($b);
                $k++;
                if($k%2 == 0) {echo "<br>";}
            }
        ?>
    </div>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>

</center>
<script>
$(document).ready(function () {
    if($(window).width() < 768) {
        $('#content').removeClass('border-right');
    }
});
</script>
</body>
</html>