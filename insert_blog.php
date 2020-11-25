<?php
//debug info
//comment this block
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// trespasser
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	session_regenerate_id();
}
if(!isset($_SESSION['create'])){
	header("Location: 404.php");
	die();
}

// avoid special charecters
require_once "static/scripts/anti_injection.php";
if(!(isset($_FILES) && isset($_POST))){
	die("Error in submitting form!");
}
// Authenticated users with their respective passwords
$pass = array("test#123", "abas#123", "inas#123", "fadi#123");
$users = array("tester", "Abbas K.", "Inas M.", "Fadi H.");
$desciption = array("Testing utility", "Web Developer", "Social Media Manager", "General Manager");

if (in_array($_POST['p'], $pass)) {
	//Fetching Values from URL and sanitising them
	$p=$_POST['p'];
	$h=escape_mimic($_POST['h']);
	$s=escape_mimic($_POST['s']);
	$a=escape_mimic($_POST['a']);
	$b=escape_mimic($_POST['b']);
	$c=escape_mimic($_POST['c']);
	$usr = str_replace($pass, $users, $p);
	$jd = str_replace($pass, $desciption, $p);
	
	if($init = file_get_contents("static/blogs/log.json")){
		$text = json_decode($init, true);

		if($usr == "Fadi H."){
			// preapprove if Fadi posts a blog
			$id = end($text['posts']);
			$id += 1;
			array_push($text['posts'], $id);
			$blog['body']['bid'] = $id;
			// update total entries
			$total = $text['total'];
			$total += 1;
			$text['total'] = $total;

			$approved = 1;
		}
		else{
			// unapproved temporary post
			$id = end($text['pending']);
			$id += 1;
			array_push($text['pending'], $id);
			$blog['body']['bid'] = $id;
			// update pending entries
			$total = $text['pending_total'];
			$total += 1;
			$text['pending_total'] = $total;

			$approved = 0;
		}

		// post entries
		$blog['body']['title'] = $h;
		$blog['body']['subtitle'] = $s;
		$blog['body']['content'] = $b;
		$blog['body']['color'] = $a;
		$blog['body']['badges'] = explode(",",$c);
		$blog['body']['author'] = $usr;
		$blog['body']['description'] = $jd;
		$blog['body']['date'] = date('jS M Y');

		// update log
		file_put_contents('static/blogs/log.json', json_encode($text));
		// open post file
		$blog['path'] = "static/blogs/$id.json";
		$blog['file'] = fopen($blog['path'], 'w+');

	}
	else{
		die('!w');
	}

	// --------------------------------------------------- image upload -------------------------------------------------------

	function revert($f, $bak, $pat, $msg){
		fclose($f);
		file_put_contents('static/blogs/log.json', $bak, LOCK_EX);
		unlink($pat);
		die($msg);
	}

	// empty validation
	if(empty($_FILES['file'])){
		revert($blog['file'], $init, $blog['path'], "Broken image upload");
	}

	$extensions = array("jpg", "jpeg", "svg", "gif", "png");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	
	if(!in_array($extension, $extensions)){
		revert($blog['file'], $init, $blog['path'], "Uploaded file is not an image!");
	}
	// image with extension
	$blog['body']['image'] = "$id"."."."$extension";

	// upload image if less than 3mb
	if($_FILES['file']['size'] < 5242880){
		try{
			move_uploaded_file($_FILES['file']['tmp_name'],'img/blogs/'. $id .'.'. $extension);
		}
		catch(Exception $e){
			revert($blog['file'], $init, $blog['path'], $e);
		}
	}
	else{
		revert($blog['file'], $init, $blog['path'], "File size must be less than 5 MB");
	}
	
	// writing to blog only if image uploaded
	file_put_contents($blog['path'], json_encode($blog['body']), LOCK_EX);
	fclose($blog['file']);

	// send mail for approval	
	if($approved == 0){
		require_once "static/scripts/approval_mail.php";
		if(approval_mail($id, $usr)){
			die("okay");
		}
		else{
			die("!m");
		}
	}
	// final
	else if($approved == 1){
		// session end
		unset($_SESSION['create']);
		session_destroy();
		die("ok");
	}
}
else{
	die("!p");
}
?>