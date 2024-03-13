<?php 
 require 'users_db.php';
 require 'session.php';
$email = $_POST['email'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result = $users_db->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != ''){
        $userIpAddress = $_SERVER['HTTP_FORWARDED_FOR'];
    }
    else {
        $userIpAddress = $_SERVER['REMOTE_ADDR'];
    }
    $log_file = fopen("../logs/log.txt", "a") or die("Unable to open log file.");
    $log = "Logged action: login. \n" . "Username: " . $_SESSION['username'] . ", ID: " . $_SESSION['id'] . ", IP address: " . $userIpAddress . "\n -------- \n";
    fwrite($log_file, $log);
    fclose($log_file);
    echo "<h1>Login Success</h1>";
    // TO DELETE old authentication method using a username cookie.
    //setcookie('username', $row['username'], time() + 10000, "/");
    //setcookie('user_id', $row['id'], time() + 10000, "/");
    
}
else {
    die("<h1>Login failled<h1>");
}
$users_db->close();
sleep(1);
header('Location: profile.php'); //set response code later
?>