<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>URL Shortener</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h1 class="title">Shorten a URL.</h1>
            
            <?php
            if(isset($_SESSION['feedback'])) {
                echo "<p>{$_SESSION['feedback']}</p>";
                unset($_SESSION['feedback']);
            }
            ?>
            
            <form action="shorten.php" method="post">
                <input type="url" name="url" placeholder="Enter a URL here." autocomplete="off">
                <input type="submit" value="shorten">
            </form>
        </div>
        <?php
        
        ?>
    </body>
</html>
