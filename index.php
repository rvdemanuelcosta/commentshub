
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/user_profile.css">
        <link rel="stylesheet" href="css/buttons.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/loadAllComments.js"></script>
        <?php include "php/db_connect.php";?>

        <title>Comments hub</title>
    </head>
    <body onload="loadComments()">
        <header>
            <?php include "php/header.php";?>
        </header>
        <main>
            <h1>Welcome to Comments Hub.</h1>
            <h2>Share you comments about anything, clothes, books, movies, 
                animes and many others things.
            </h2>
            <p>Login or create an account to have access to 
                all features available.
            </p>
            <div class="content-preview">
                <div class="comment-row">
                    <div class="comment">
                        <h2><?php $result = $conn->query("select * from comments where id=1"); while($row = $result->fetch_assoc()) { echo $row["username"];?></h2>
                        <h3>Topic</h3>
                        <p><?php echo $row['comment'];}?></p>
                    </div>
                    <div class="comment">
                    <h2><?php $result = $conn->query("select * from comments where id=2"); while($row = $result->fetch_assoc()) { echo $row["username"];?></h2>
                        <h3>Topic</h3>
                        <p><?php echo $row['comment'];}?></p>
                    </div>
                    <div class="comment">
                    <h2><?php $result = $conn->query("select * from comments where id=3"); while($row = $result->fetch_assoc()) { echo $row["username"];?></h2>
                        <h3>Topic</h3>
                        <p><?php echo $row['comment'];}?></p>
                    </div> 
                </div>
                <div class="comment-row">
                    <div class="comment">
                        <h2>test<h2>
                    </div>
                    <div class="comment">
                        
                    </div>
                    <div class="comment">
                        
                    </div>
                </div>
                <div class="comment-row">
                    <div class="comment">

                    </div>
                    <div class="comment">
                        
                    </div>
                    <div class="comment">
                        
                    </div>
                </div>
                
            </div>
            
            <div class="commentsToolBar vw-50 margin-h-auto">
                <h2>Comments</h2>
                <input type="button" onclick="loadComments()" id="reload-bt" value="&#128260">
            </div>
            <div class="comment-section vw-50 margin-h-auto" id="commentSection">
                
                
                        
                        <?php /*    TO DELETE
                            $result = $conn->query("select * from comments ORDER BY id DESC");
                            while($row = $result->fetch_assoc()){
                                echo "<div class='comment'><div class='pfp'><img src='users/$row[username]/pfp.png' class='user_pfp'></div><a href='profiles/" . $row["username"] . "'>"
                                 . $row['username'] . "</a><br><p>" . $row['comment'] . "</p></div>";
                            }
                            $conn->close(); */
                        ?>
            </div>
        </main>
        <footer>
            <p>Website creator: Lucas E. C. M. Mendonça</p>
        </footer>
    </body>
</html>