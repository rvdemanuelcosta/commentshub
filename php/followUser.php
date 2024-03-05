<?php
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
    }
    else{
        echo "User not followed";
    }
    $followUserConn->close();
?>