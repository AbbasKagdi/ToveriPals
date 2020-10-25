<?php

function approval_mail($id, $user){
    // change mail recipients here
    $to = "abbas@toveripals.com, fadi@toveripals.com";
    $subject = "Blog Approval";
    
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <h1>Hello!</h1>
    <p>Please review this newly submitted article by $user</p><br>
    <a href='https://toveripals.com/feed.php?article=-$id'>Review</a><br>
    <a href='https://toveripals.com/static/blogs/$id.json' download>Download Raw File</a><br><br>
    <p>Irreversible actions</p>
    <a href='https://toveripals.com/approve.php?user=hawwa&action=a&id=$id'>Approve</a><br>
    <a href='https://toveripals.com/approve.php?user=hawwa&action=p&id=$id'>Purge</a><br><br>
    <small>This is a computer generated email, please do not attempt to reply. For queries contact info@toveripals.com</small>
    </body>
    </html>
    ";
    
    // headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Webmaster <info@toveripals.com>';
    
    try{
        // mail to moderator for post approval
        mail($to,$subject,$message,$headers);
    }
    catch(Exception $e){
        // print exception
		return "!m";
    }
    return true;
}

?>