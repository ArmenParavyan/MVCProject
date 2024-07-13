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
        // header("Location: " . APP_PATH . "app/views/user/index.php");
        // exit();
        $data = $createdUser->getAll(); 
        print_r($data);
        require_once 'app/views/user/index.php';
    } 

    public function delete($id) {
        $user = new User(); 
        $user->delete($id); 
        echo json_encode(['success' => true]);
        // $data = $user->getAll();
        // require_once 'app/views/user/index.php';
    }

    public function getUser($id) {
        $user = new User();
        $data = $user->getUserById($id); 
        require_once 'app/views/user/edit.php';
    }

    public function editUser($userData) {
        $user = new User();
        $user->edit($userData); 
        $data = $user->getAll(); 
        require_once 'app/views/user/index.php';
    }
}