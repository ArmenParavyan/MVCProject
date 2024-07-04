<?php 

namespace App\controllers;

use App\controllers\BaseController;

class UserController extends BaseController {

    public function index() {
        require_once 'app/views/user/index.php';
    }

    public function create() {
        require_once 'app/views/user/create.php';
    } 

    public function addUser($request) {
        echo "Aglchk";
    }
}