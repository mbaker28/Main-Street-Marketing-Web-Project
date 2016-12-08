<?php

class Shortener {
    protected $db;
    
    public function _construct() {
        //for demo purposes
        $this->db = new msqli('localhost', 'matt', 'password', 'short_urls');
    }
    
    protected function generateCode($num) {
        
    }
    
    public function makeCode($url) {
        
    }
    
    public function getURL($code) {
        
    }
}
