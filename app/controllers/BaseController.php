<?php 

namespace App\controllers;

class BaseController {
    public function view($path, $data = []) {
        $readyPath = "app/views/$path" . ".php";
        if (file_exists($readyPath)) {
            require_once $readyPath; 
        }
    }
}