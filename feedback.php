<?php
//debug info
//comment this block
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// server set to kuwait time
date_default_timezone_set('Asia/Kuwait');

if(isset($_POST)){
    // captcha token is essential
    if(!isset($_POST['token'])){
        die("Captcha Failed! Try again.");
    }

    // process captcha
    $verify = "https://www.google.com/recaptcha/api/siteverify";
    
    // encapsulate private key
    $data['secret'] = "6LfKsvsUAAAAAP1HOp2t9hBDXvd9irIDRW-RMW_h";
    $data['response'] = $_POST['token'];
    $data['remoteip'] = $_SERVER['REMOTE_ADDR'];
    
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => "POST",
            'content' => http_build_query($data)
        )
    );
    // get a verified answer from google
    $context = stream_context_create($options);
    $response = file_get_contents($verify, false, $context);
    $result = json_decode($response, true);
    $threshold = 0.5;

    // exit if captcha fails
    if(!$result['success']){
        die($result['error-code'][0]);
    }
    // exit if low score
    if($result['score'] < $threshold){
        die("This action has been blocked for security reasons.");
    }
    
    // start mail processing after captcha success
    // avoid special charecters
    require_once "static/scripts/anti_injection.php";
    // collect values
	$name=escape_mimic($_POST['nom']);
	$mail=escape_mimic($_POST['mail']);
	$subject=escape_mimic($_POST['subject']);
    $message=escape_mimic($_POST['msg']);
    
    // end script if empty values
    if($name == "" || $mail == "" || $subject == ""  || $message == ""){
        die("Error in filling form");
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // change mail recipients here
    $to = "fadi@toveripals.com";
    $message = "<html><body><div><p><big>$message</big></p><p><i><b>Note:</b> Do not attempt to reply to this email address.</i></p><small>Sent from <a href='https://toveripals.com/contact.php' target='_blank'>Toveri Pals</a> <br>Sender: $name <br>IP: ".$_SERVER['REMOTE_ADDR']."<br>Timestamp: ".date('jS M Y h:i a')." AST<br>Google Captcha Score: ".$result['score']."</small></div></body></html>";

    // headers
    $headers = "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type:text/html;charset=UTF-8" . PHP_EOL;
    $headers .= "From: $mail" . PHP_EOL;
    $headers .= 'Cc: info@toveripals.com';

    try{
        // mail to moderator for post approval
        mail($to,$subject,$message,$headers);
    }
    catch(Exception $e){
        die($e);
    }
    // if try block success
    die("ok");
}
else{
    header("Location: 404.php");
	die();
}
?>