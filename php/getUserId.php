<?php 
    $usertofollow = $_GET['usertofollow'];
    if($usertofollow != null){
        $idtofollow = getUserID($usertofollow);
        echo $idtofollow;
    }
    else{
        echo "get parameter not set.";
    }
    function getUserID($username){
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "crowd_comments";
        $query = "SELECT * FROM users WHERE username='$username'";
        $sqlToUserId = new mysqli($server, $user, $password, $db);
        $userIdResult = $sqlToUserId->query($query) or die($sqlToUserId->conn_error);
        $row = $userIdResult->fetch_assoc();
        return $row['id'];
    }
?>