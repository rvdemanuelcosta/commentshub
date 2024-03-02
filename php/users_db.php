<?php 
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "crowd_comments";

$users_db= new mysqli($server, $username, $password, $database);
if($users_db->connect_error){
    die("error connecting to database: " . connect_error);
}
echo "Connected to database.";
?>