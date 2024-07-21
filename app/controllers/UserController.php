<?php 

namespace App\controllers;

session_start();

use App\controllers\BaseController;
use App\models\User;

class UserController extends BaseController { 

    public $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        $data = $this->user->getAll(); 
        return $this -> view("user/index", $data);
    }

    public function create() {
        return $this->view("user/create");
    } 
    
    public function saveToSession($key, $data) {
        $_SESSION[$key] = $data;
    }

    public function addUser($request) {
        $this->user->create($request); 
        $data = $this->user->getAll(); 
        $this->saveToSession('users', $data->fetch_all(MYSQLI_ASSOC));
        header("Location: /php-das/mvc/app/views/user/index.php");
        exit();
    } 

    public function delete($id) {
        $this->user->delete($id); 
        echo json_encode(['success' => true]);
    }

    public function getUser($id) {
        $data = $this->user->getUserById($id); 
        return $this->view("user/edit", $data);
    }

    public function editUser($userData) {
        $this->user->edit($userData); 
        $data = $this->user->getAll(); 
        return $this->view("user/index", $data);
    }
}