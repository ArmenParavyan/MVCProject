<?php 

namespace App\controllers;

use App\controllers\BaseController;

class AboutController extends BaseController {
    public function index() {
        require_once 'app/views/about/index.php';
    }
}