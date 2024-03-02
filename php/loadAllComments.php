<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "crowd_comments";

    $conn = new mysqli($server, $user, $pass, $db);
    $result = $conn->query("select * from comments ORDER BY id DESC");
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-section fit-content-h'>
        <div class='comment'>
        <div class='pfp'><img src='users/$row[username]/pfp.png' class='user_pfp'></div><a onclick='loadUserData()' href='users/$row[username]/public_profile.php?username=$row[username]" . "'>"
            . $row['username'] . "</a><br>
            <p>" . $row['comment'] . "</p></div></div>";
    }
    $conn->close();
?>