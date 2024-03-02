<?php

$server_address = "127.0.0.1";
$server_username = "root";
$server_password = "";
$server_database = "crowd_comments";

$conn = new mysqli($server_address, $server_username, $server_password, $server_database);

if($conn->connect_error){
    die("Connection with database failed: " . connect_error);
}

$sql = "Select * from comments";
$result = $conn->query($sql);
 
function close_conn(){
    global $conn;
    $conn->close();
}
?>