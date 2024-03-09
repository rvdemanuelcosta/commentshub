<?php session_start();
if(isset($_SESSION['id'])){
    $uid = "'$_SESSION[id]'";
}?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/buttons.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/loadAllComments.js"></script>
        <title>Home</title>
    </head>
    <body>
        <header><?php include "php/header.php";?>
        </header>
        <main>
            <div class="margin-h-auto fit-content-w">
                <a class="link-bt" onclick="ldFollowingCMTs(<?php ?>)">Following</a> 
                <a class="link-bt">Tranding</a>
                <a class="link-bt" onclick="loadComments()">All comments</a>
            </div>
            <div class="load-content vw-50 margin-h-auto">
            <div class="load-content vw-50 margin-h-auto" id="commentSection">

            </div>
            <?php 
        
         ?></main>
        <footer><?php include "php/footer.php"; ?></footer>
    </body>
</html>