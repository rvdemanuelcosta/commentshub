
<?php 
// start user session if necessary.
session_start();
// setup the sql connection
$server = "localhost";
$username = "root";
$password = "";
$database = "crowd_comments";
$con = new mysqli($server, $username, $password, $database);

// select all the followed users id from the connected user
$query = "SELECT * FROM followers WHERE follower_id = $_SESSION[id];";
$result = $con->query($query);
if($result->num_rows > 0){
    $index = $result->num_rows - 1;
    $followedIds = array();
    while($row = $result->fetch_assoc()){
        $followedIds[] = $row['followed_id'];
    }
    $usersArray = array();
    // get the username of the followed IDs.
    foreach ($followedIds as $x){
        $getUsersQ = "SELECT * FROM users WHERE id='$x';";
        $userResult = $con->query($getUsersQ);
        $row = $userResult->fetch_assoc();
        if($row['id'] != null && $row['id'] != '0'){
            $usersArray[] = $row['username'];
        }
    }
    // creating the UNION query to sellect the comments from all followed users ordered by comment posted id.
    $cmtQ = "";
        foreach($usersArray as $y){
            $cmtQ = $cmtQ . "SELECT * FROM comments WHERE username='$y' UNION ";
        }
    $cmtQ = substr($cmtQ, 0, strlen($cmtQ) -7) . " ORDER BY id DESC;";

    // fetch and write the comments to the page.
    $cmtResult = $con->query($cmtQ);
    while($cmtRows = $cmtResult->fetch_assoc()){
        echo "<div class='comment-section fit-content-h'>
        <div class='comment'>
        <div class='pfp'><img src='users/$cmtRows[username]/pfp.png' class='user_pfp'></div><a onclick='loadUserData()' href='users/$cmtRows[username]/public_profile.php?username=$cmtRows[username]" . "'>"
            . $cmtRows['username'] . "</a><br>
            <p>" . $cmtRows['comment'] . "</p></div></div>";

    }

    // TO DELETE
    //$cmtRows = $cmtResult->fetch_assoc() or die($con->connect_error);
    //var_dump($usersArray);
    
    
}
else { // show something if the user is not following anyone.
    echo "You are not following any users.";
}
$con->close();

?>