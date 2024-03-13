<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "crowd_comments";

$conn = new mysqli($server, $user, $password, $database);
$sql = "SELECT * FROM users WHERE username='$_POST[username]' OR email='$_POST[email]'";
$result = $conn->query($sql);

// check if username or email is taken.
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $username_taken = $row['username'] == $_POST['username'];
    if($row['username'] == $_POST['username'] && $row['email'] == $_POST['email']){
        echo "<a href='../index.php'>Home</a>,
        <a href='../signup.html'>Sign up</a>, <a href='../login.html'>Login</a>";
        die("Username and email already in use.");
    }
    if($row['username'] == $_POST['username']){
        echo "<a href='../index.php'>Home</a>,
        <a href='../signup.html'>Sign up</a>, <a href='../login.html'>Login</a>";
        die('Username is already in use.');
    }
    elseif($row['email'] == $_POST['email']){
        echo "<a href='../index.php'>Home</a>,
        <a href='../signup.html'>Sign up</a>, <a href='../login.html'>Login</a>";
        die('Email is already in use.');
    }

}
$pass_hash = md5($_POST['passwd']);
$sql = "INSERT INTO users (username, email, password, gender) VALUES('$_POST[username]', '$_POST[email]', '$pass_hash', '$_POST[gender]')";

// set up user folder and files in the server.
if($conn->query($sql) === TRUE){
    mkdir("../users/$_POST[username]");
    // check if the user gender is male or female and select a pfp based on it.
    if($_POST['gender'] == 'male'){
        $pfp_path = "../users/default/male/";
    }
    else {
        $pfp_path = "../users/default/female/";
    }
    copy($pfp_path . 'pfp.png', '../users/' . $_POST['username'] . "/pfp.png");
    copy($pfp_path . 'cover.png', '../users/' . $_POST['username'] . "/cover.png");
    echo "User account created successfuly.";
    header("Location: ../index.php");   
}
 else {
    echo "error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>