<?php 
    if(!isset($_SESSION['id'])){
            session_start();
    }
    $user_authenticated = false;
    //$user_cookie = null;
    /*if(isset($_COOKIE['username'])){
        $user_cookie = $_COOKIE['username'];
    } */
    if(isset($_SESSION['id'])){
        $user_pfp = "http://$_SERVER[HTTP_HOST]/commentshub/users/$_SESSION[username]/pfp.png";
        /*
    if(substr($_SERVER['REQUEST_URI'], -9) == "index.php"){
        $user_pfp = "users/$_SESSION[username]/pfp";
    }
    else{
        $user_pfp = "../users/" . $_SESSION['username'] . "/pfp";
    } */
}
?>