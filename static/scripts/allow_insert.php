<?php

// allow master password
$allow = array("b10gcr8", "fadi#123");
if(isset($_POST['enter'])){
    if(in_array($_POST['enter'], $allow)){
        session_start();
        $_SESSION['create'] = true;
        die("allow");
    }
    else{
        die("Wrong Password");
    }
}
else{
    die("Network problem");
}

?>