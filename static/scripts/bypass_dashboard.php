<?php

if(isset($_POST['enter'])){
    if($_POST['enter'] == 'fadi#123'){
        session_start();
        $_SESSION['create'] = true;
        $_SESSION['approve'] = true;
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