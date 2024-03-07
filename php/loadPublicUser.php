<?php 
session_start();
$username = $_GET['username'];
$followers_count = 15;
$server_path = "http://$_SERVER[HTTP_HOST]/commentshub";
$follower = "0";

if(isset($_SESSION['id'])){
    $follower = "$_SESSION[id]";
    $followFunction = "followUser($follower)";
} else{
    $followFunction = "loginToFollow()";
    echo "Login to follow users.";
}
$followbts = "<a class='link-bt' onclick='$followFunction' name='followid' id='followButton'>Follow</a>";
$isFollowing = false;
$server = "localhost";
$dbUsername = "root";
$pass = "";
$database = "crowd_comments";
$checkFollowState = new mysqli($server, $dbUsername, $pass, $database);
$query = "SELECT * FROM users WHERE username='$username';";
$qResult = $checkFollowState->query($query);
$uidToFollow = $qResult->fetch_assoc();
echo $uidToFollow['id'] . " is $username id";
if(isset($_SESSION['id'])){
    $query = "SELECT * FROM followers WHERE followed_id='$uidToFollow[id]' AND follower_id=$_SESSION[id]";
    $followResult = $checkFollowState->query($query);
    $followEntry = $followResult->fetch_assoc();
    if(isset($followEntry['id']) && $followEntry['id'] != null){
        echo "entry in followers is: " . $followEntry['id'];
        $isFollowing = true;
    }
    else{
        echo "user not followed.";
        $isFollowing = false;
    }
}

if($isFollowing){
    $followbts = "<a class='link-bt' onclick='unfollow($_SESSION[id])' name='followid' id='followButton'>Unfollow</a>";
}
else {
    $followbts = "<a class='link-bt' onclick='$followFunction' name='followid' id='followButton'>Follow</a>";
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
        $followbts
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