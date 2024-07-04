<?php 

namespace App\controllers;

use App\controllers\BaseController; 

class WelcomeController extends BaseController {
    public function index() {
        require_once 'app/views/welcome/index.php';
    }
}