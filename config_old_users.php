

<?php // checks if the users in the database have a folder and profile picture, if not create one.
    $server = "127.0.0.1";
    $username = "root";
    $pass = "";
    $database = "crowd_comments";
    $sql = "SELECT * FROM users WHERE id < 15";

    $conn = new mysqli($server, $username, $pass, $database);
    $result = $conn->query($sql);
        /////////////// BE CAREFULL WHILE USING THIS CODE, IT WILL HASH USERS PASSWORD IN THE DATABASE.
    /*
    while($row = $result->fetch_assoc()){
        $hashed_pass = md5($row['password']);
        $id_to_hash = $row['id'];
        $sql_alter = "UPDATE users SET password='$hashed_pass' WHERE id='$id_to_hash'";
        if($conn->query($sql_alter)){
            echo "<br>" . $row['username'] . " ------- " . $row['id'] . " --------- PASSWORD HASHED";
        }
    }
    */




        //////////////  CHECK FOR EXISTENT AND NON EXISTENT USER FOLDERS, 1 PROFILE PICTURE 2 COVER PHOTO, 3 public profile.
    /*
    while($row = $result->fetch_assoc()){
        echo $row['username'];
        
        if(file_exists("./users/" . $row['username'])){
            echo "user " . $row['username'] . " exists";
        }
        else {
            // s1 - uncoment s1 to create a folder for users
           mkdir("./users/" . $row['username']);
        }
        $default_path = "./users/default/";
        $default_path_default = "./users/default";
        if($row['gender'] == "male"){
            $default_path = "./users/default/male";
        }
        else{
            $default_path = "./users/default/female";
        }
        // 1
        if(file_exists("./users/" . $row['username'] . "/pfp.png")){
            echo "file exists";
        } else {
            copy("$default_path/pfp.png", "./users/" . $row['username'] . "/pfp.png");
        }
        // 2
        if(file_exists("./users/" . $row['username'] . "/cover.png")){
            echo "file exists";
        } else {
            copy("$default_path/cover.png", "./users/" . $row['username'] . "/cover.png");
        } 
        // 3
        if(file_exists("./users/" . $row['username'] . "/public_profile.php")){
            echo "PUBLIC PROFILE ALREADY EXISTS <br>";
            // UNCOMENT TO REPLACE 
            //unlink("./users/" . $row['username'] . "/public_profile.php");
           // copy("$default_path/public_profile.php", ".users/" . $row['username'] . "/public_profile.php");
        } else {
            copy("$default_path_default/public_profile.php", "./users/" . $row['username'] . "/public_profile.php");
            echo "CREATED USER PUBLIC PROFILE.<br>";
        }
    }
        */
    // DELETE USERS PERSONAL FILES. [ SUPOSED TO HELP REPLACING]



    $conn->close();
?>