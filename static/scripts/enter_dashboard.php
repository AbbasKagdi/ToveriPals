<?php

// allow master password
$allow = array("3nt3rdash", "fadi#123");
if(isset($_POST['enter'])){
    if(in_array($_POST['enter'], $allow)){
        session_start();
        if(isset($_SESSION['create'])){
            $_SESSION['approve'] = true;
            die("allow");
        }
        else{
            die("admin not logged in");
        }
    }
    else{
        die("Wrong Password");
    }
}
else{
    die("Network problem");
}

?>