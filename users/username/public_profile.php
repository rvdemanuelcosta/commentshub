<!DOCTYPE html>
<?php $username = $_GET['username'];?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <script src="../../js/loadPublicUsername.js"></script>
        <link rel="stylesheet" href="../../css/user_profile.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/buttons.css">
        <link rel="stylesheet" href="../../css/header.css">
        <title id="title">
            username
        </title>
    </head>
    <script>
       // var username = "<?php echo basename(dirname(__FILE__));?>";
       var users_path = "/WebDevelopment/simple/crowd-comments/site/php/";
        var public_profile = users_path + "loadPublicUser.php"
        console.log(public_profile);
        var username = "<?php echo $username;?>";
        console.log(username);
    </script>
    <body onload="loadPublicUser(public_profile, username)">
        <header><?php include "../../php/header.php";?></header>
        <main id="profile-main">

        </main>
        <footer class="vw-50 margin-h-auto"><?php include "../../php/footer.php"?></footer>
    </body>
</html>