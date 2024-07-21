<?php 

namespace App\controllers;

use App\controllers\BaseController;

class AboutController extends BaseController {
    public function index() {
        return $this->view("about/index");
    }
}