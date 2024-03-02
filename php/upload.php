<?php 
    $up_dir = "../uploads/";
    $up_file = $up_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOK = 1;
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $up_file)){
        echo "file uploaded";
    }
?>