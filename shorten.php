<?php

session_start();
require_once 'classes/Shortener.php';

$s = new Shortener();

if(isset($_POST['url'])) {
    $url = $_POST['url'];
    
    if ($code = $s->makeCode($url)) {
        $_SESSION['feedback'] = "Generated! Your short URL is: <a href=\"http://localhost:80/WebProject/{$code}\">http://localhost:80/WebProject/{$code}</a>";
    } else {
        $_SESSION['feedback'] = "There was a problem. Invalid URL, perhaps?";
    }
}

header('Location: index.php');