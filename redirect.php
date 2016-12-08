<?php
require_once 'classes/Shortener.php';

if(isset($_GET['code'])) {
 $s = new Shortener;
$code = $_GET['code'];

if($url = $s->getUrl($code)) {
    header("Location: {$url}");
    
    //Send query to update count of url used
    $s->db = new mysqli('localhost', 'matt', 'password', 'short_urls');
    $s->db->query("UPDATE links SET count = count + 1 WHERE url = '{$url}'");
    die();
}
}

header('Location: index.php');