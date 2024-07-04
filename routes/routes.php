<?php 

use App\controllers\UserController;
use App\controllers\AboutController;
use Core\route\Route;

new Route;

// if (empty($_GET['path'])) {
//     $url = '';
// } else {
//     $url = $_GET['path'];
// }

// switch ($url) {
//     case '':
//         $controller = new UserController();
//         $controller->index();
//         break;
//     case 'about': 
//         $controller = new AboutController(); 
//         $controller->index();
//         break;
//     default:
//         echo 'Bghdo';
//         break;
// }