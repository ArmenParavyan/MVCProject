<?php 

namespace App\controllers;

use App\controllers\BaseController;
use App\models\User;

class UserController extends BaseController {

    public function index() {
        $user = new User();
        $data = $user->getAll(); 
        require_once 'app/views/user/index.php';
    }

    public function create() {
        require_once 'app/views/user/create.php';
    } 

    public function addUser($request) {
        $createdUser = new User();
        $createdUser->create($request); 
        require_once 'app/views/user/index.php';
    } 

    public function delete($data) {
        $user = new User(); 
        $user->delete($data['id']); 
        $data = $user->getAll();
        require_once 'app/views/user/index.php';
    }

    public function edit($id) {
        $user = new User();
        $data = $user->getUserById($id); 
        require_once 'app/views/user/edit.php';
    }
}