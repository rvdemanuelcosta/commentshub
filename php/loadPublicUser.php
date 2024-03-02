<?php 
$username = $_GET['username'];
    echo "<div class='user_profile_header' style='background-image: url(../../users/$username/cover.png)';>
        <div class='pfp'>
            <img class='usr_pfp' src='../../users/$username/pfp.png'>
        </div>
        <div>
            <p>$username</p>
        </div>
    </div>
    <div class='margin-h-auto vw-50' style='margin-top: 30px;'>
        <a href='#' class='link-bt'>Follow</a>
        <a href='#' class='link-bt'>Report</a>
    </div>
    <div class='bio-public vw-50 margin-h-auto'>
        <h2>Biography</h2>"; 
        /// check if user has or not a default bio and echo it in the <p> bellow.
        if("a" == "a"){
            echo "yes";
        }
        else {
            echo "no";
        }
        echo "
        <p>User did not wrote a biography.</p>
    </div>
    ";
?>