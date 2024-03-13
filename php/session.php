<?php 
    if(!isset($_SESSION['id'])){
            session_start();
    }
    $user_authenticated = false;
    if(isset($_SESSION['id'])){
        $user_pfp = "http://$_SERVER[HTTP_HOST]/commentshub/users/$_SESSION[username]/pfp.png";
}
?>