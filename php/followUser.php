<?php
session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "crowd_comments";
    $followUserConn = new mysqli($server, $username, $password, $database);
    $followed = $_GET['followed'];
    $follower = $_GET['follower'];
    $date = date("Y-m-d");
    $query = "INSERT INTO followers (followed_id, follower_id, following_since) VALUES ('$followed', '$follower', '$date');";
    if($followUserConn->query($query)){
        echo "User followed.";
        $logFile = fopen("../logs/log.txt", "a") or die("Unable to load log file.");
        if(isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && $_server["HTTP_X_FORWARDED_FOR"] != ""){
            $ipAddr = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        else{
            $ipAddr = $_SERVER["REMOTE_ADDR"];
        }
        $log = "Logged Action: Followed a user.\n" . "Username: $_SESSION[username], ID: $_SESSION[id], IP address: $ipAddr \n" .
        "The user $_SESSION[username] followed the user id $followed. \n -------- \n";
        fwrite($logFile, $log);
        fclose($logFile);  
    }
    else{
        echo "User not followed";
    }
    $followUserConn->close();
?>