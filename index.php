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
    <body style="background-color: #ccccce;">
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
        <table style="margin-top: 15px;" align="center">
        <?php
            require_once 'classes/Shortener.php';
            $s = new Shortener();
            
            $s->db = new mysqli('localhost', 'matt', 'password', 'short_urls');
            $output = $s->db->query("SELECT url, code, count, created FROM links");
            
            //If the 'links' table has data, each row of the table is outputted to the page
            if ($output->num_rows > 0) {
                echo "";
                echo "<tr><th>Original URL</th> <th>Short URL</th> <th>Clicks</th> <th>Created</th></tr>";
                while($row = $output->fetch_assoc()) {
                    echo "<tr>" . "<td>" . "<a href=\"{$row["url"]}\">" . $row["url"] . "</a>" . "</td>" . "<td>" . "<a href=\"http://localhost:80/WebProject/{$row["code"]}\">" . "http://localhost:80/WebProject/{$row["code"]}" . "</a>" . "</td>" . "<td align=\"center\">" . $row["count"] . "</td>" . "<td>" . $row["created"] . "</td>" . "</tr>";
                    echo "<tr></tr>";
                }
                
                } else {
                    echo "<p style=\"text-align: center;\">0 results</p>";    
                }
                ?>
            </table>
    </body>
</html>
