<?php 
    session_start();
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "crowd_comments";

    $conn = new mysqli($server, $user, $pass, $db);
    $result = $conn->query("select * from comments WHERE username = '$_SESSION[username]' ORDER BY id DESC");
    while($row = $result->fetch_assoc()){
        echo "
        <div class='comment'>
        <div class='pfp'><img src='../users/$row[username]/pfp.png' class='user_pfp'></div><a href='profiles/" . $row["username"] . "'>"
            . $row['username'] . "</a><br>
            <p>" . $row['comment'] . "</p></div>";
    }
    $conn->close();
?>