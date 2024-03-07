<?php 
    $server = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $db =  "crowd_comments";
    $followed  = $_GET['followed'];
    $follower = $_GET['follower'];
    $con = new mysqli($server, $dbUser, $dbPass, $db);
    $query = "DELETE FROM followers WHERE followed_id='$followed' AND follower_id='$follower';";
    if($con->query($query)){
        alert("user is not following");
    }
    $con->close();
?>