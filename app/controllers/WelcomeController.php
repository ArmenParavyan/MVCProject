<?php 

namespace App\controllers;

use App\controllers\BaseController; 

class WelcomeController extends BaseController {
    public function index() {
        return $this->view("welcome/index");
    }
}