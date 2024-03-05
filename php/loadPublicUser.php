<?php 
session_start();
$username = $_GET['username'];
$followers_count = 15;
$server_path = "http://$_SERVER[HTTP_HOST]/commentshub";
$follower = "1";
if(isset($_SESSION['id'])){
    $follower = "$_SESSION[id]";
} else{
    echo "Login to follow users.";
}

//include "getUserId.php";
    echo "<div class='user_profile_header' style='background-image: url(../../users/$username/cover.png)';>
        <div class='pfp'>
            <img class='usr_pfp' src='../../users/$username/pfp.png'>
        </div>
        <div>
            <p>$username</p>
        </div>
    </div>
    <div class='margin-h-auto vw-50' style='margin-top: 30px;'>
    
        <p style='display: inline'>$followers_count followers</p>
        <a class='link-bt' onclick='followUser($follower)' name='followid' id='followButton'>Follow</a>
        <a href='#' class='link-bt'>Report</a>
    </div>
    <div class='bio-public vw-50 margin-h-auto'>
        <h2>Biography</h2>"; 
        /// check if user has or not a default bio and echo it in the <p> bellow.
        if("a" == "a" && isset($_SESSION['username'])){
            //echo $username . " id is: "; getUserID($username);
            echo $_SESSION['username'] . " id is: " . $_SESSION['id'];
        }
        else {
            echo "no";
        }
        echo "
        <p>User did not wrote a biography.</p>
    </div>
    ";
?>