
<?php // get the user ip address
if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARTDED_FOR'] != '') {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}   


// javascript with php
$stri = "swordartOnline";
$ondb = md5($stri);
$taken = md5($stri) == $ondb;
$likes = 10;
if($taken){
    echo "like";
}
else {
    echo $ip_address;
}
$server = "localhost";
$u = "root";
$pass = "";
$db = "crowd_comments";

$conn = new mysqli($server, $u, $pass, $db);
$result = $conn->query("select * from users WHERE id=3");
if($conn->query($sql)){
    $row = $result->fetch_assoc();
    echo $row;
} else {
    die( "failed to submite comment");
}
$conn->close();
echo $row;

// create and/or update a text file
$log_file = fopen("logs/log.txt", 'a') or die("Unable to open file");
$log = $ip_address;
fwrite($log_file, $log . "\n");
fwrite($log_file, $log . "\n");
fwrite($log_file, $log . "\n");
fclose($log_file);

?>