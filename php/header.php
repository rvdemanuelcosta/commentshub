<?php include "section.php";
$server_path = "http://" . $_SERVER['HTTP_HOST'] . "/WebDevelopment/simple/crowd-comments/site";
// TO DELETE BELLOW
/*
if(substr(__DIR__, -3) === 'php'){
    $project_root = dirname(__DIR__);
}
else if (substr(__DIR__, -4) === 'site'){
    echo "root " . __DIR__;
}
*/
// TO DELETE ABOVE
echo "
<a href='$server_path/index.php' id='logo'><img src='$server_path/images/logo.png' class='logo'></a>
    <div>
        <input type='text'> <input type='button' value='&#128270;'>
        <link rel='stylesheet' href='$server_path/css/user_profile.css'>
    </div> 
        <div class='header-links'>";
            if(!isset($_SESSION['id'])){
                echo "<a href='$server_path/login.html'>Login</a>
                <a href='$server_path/signup.html'>Sign up</a>";
                }
                else 
                {
                    
                    echo "<img src='$user_pfp.png' id='user_pfp'><a href=" . $server_path . "/php/profile.php" . " class='fit_text'>" . $_SESSION['username'] ."</a>
                    <a href='" . $server_path . "/php/logout.php'>Log out</a>";
                }
                echo "<a href='#'>About us</a>
    </div>";
    ?>