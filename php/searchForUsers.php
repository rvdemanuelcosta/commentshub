<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "crowd_comments";
    $search = $_GET['q'];
    $conn = new mysqli($server, $username, $password, $db);
    $sql = "SELECT * FROM users WHERE username LIKE '%$search%'";
    $rootPath = "http://" . $_SERVER['HTTP_HOST'] . "/commentshub";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='user-banner'>
        <div class='pfp'><img src='$rootPath/users/$row[username]/pfp.png'></div>
        <div class='username'><a href='$rootPath/users/$row[username]/public_profile.php'>$row[username]</a></div>
    </div>";
    }
    
?>