<?php 

namespace App\controllers;

use App\controllers\BaseController;

class UserController extends BaseController {

    public function index() {
        require_once 'app/views/user/index.php';
    }

}