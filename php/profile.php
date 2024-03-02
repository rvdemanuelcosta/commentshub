
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user_profile.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/buttons.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/loadUserComments.js"></script>
        <script src="../js/postComment.js"></script>
        <title>Profile</title>
</head>
    <body onload="loadComments()">

    <header>
        <?php include "header.php"; include "db_connect.php";?>
        <?php if(!isset($_SESSION['id'])){
    header("Location: ../index.php");
    }
    ?>
    </header>
    <main>
    
        <div class="user_profile_header" style="<?php echo "background-image:url('../users/" . $_SESSION['username'] . "/cover.png');";?>">
            <div class="pfp"><?php 
                echo "<img class='usr_pfp' src='../users/" . $_SESSION['username'] . "/pfp.png'>";?>
            </div>
            <div class="edit_pfp_div">
            <!-- <p><?php echo $_SESSION['username'];?></p> -->
            </div>
            <div class="edit_picture_div">
            <!--  -->
            </div>
            <div class="username">
                <p><?php echo $_SESSION['username'];?></p>
            </div>
            
        </div>
        
        <div class="comment-area">
        <form>
            <p >Make a comment</p>
            <div class="comment-box">
                <textarea name="comment_" maxlength="256" id="commentToPost"></textarea>
            </div>
            <a class="link-bt" style="margin: 10px;" onclick="postComment()">Comment</a>
        </form>
        </div>
        <div class="commentsToolBar vw-50 margin-h-auto">
            <h2>Comments</h2>
            <input type="button" value="&#128260" onclick="loadComments()" id="reload-bt">
        </div>
        <div class="comment-section vw-50 margin-h-auto" id="commentSection">
            
        </div>
    </main>
    <footer><?php include "footer.php";?></footer>
    </body>

</html>