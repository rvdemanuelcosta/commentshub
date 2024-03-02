<?php 
require 'section.php';
    //setcookie('username', '', time() - 36400, '/');
    if(isset($_SESSION['id'])){
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != ''){
            $userIpAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $userIpAddress = $_SERVER['REMOTE_ADDR'];
        }
        $log_file = fopen("../logs/log.txt", "a") or die("Unable to read log file");
        $log = "Logged action: logout. \n" . "Username: " . $_SESSION['username'] . ", ID: " . $_SESSION['id'] . ", IP address: " . $userIpAddress . "\n -------- \n";
        fwrite($log_file, $log);
        fclose($log_file);
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }
    

    header("Location: ../index.php");
?>