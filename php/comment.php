<?php 
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "crowd_comments";
session_start();
$conn = new mysqli($server, $username, $password, $database);
$comment = $_GET['comment'];
//echo $comment . "testteststestsdfg";

$sql = "INSERT INTO comments (username, comment) VALUE ('$_SESSION[username]', '$comment');";
if($conn->query($sql)){
    $log_file = fopen("../logs/log.txt", "a") or die("Unable to open log file.");
    // get the user ip address
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != ''){
        $userIpAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else { 
        $userIpAddress = $_SERVER['REMOTE_ADDR'];
    }
    // write the log to file.
    $log = "Logged action: comment. \n" . "Username: " . $_SESSION['username'] . ", ID: " . $_SESSION['id'] . 
    ", IP address: " . $userIpAddress . "\n comment: " . $comment . "\n --------- \n";
    fwrite($log_file, $log);
    fclose($log_file);
    header("Location: ../index.php");
} else {
    die( "failed to submite comment");
}
$conn->close();
?>