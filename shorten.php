<?php

session_start();
require_once 'classes/Shortener.php';

$s = new Shortener();

if(isset($_POST['url'])) {
    echo $url = $_POST['url'];
}