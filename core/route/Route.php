<?php 

namespace Core\route;

class Route {
    public string $defaultControllerName = 'welcome'; 
    public string $defaultMethodName = 'index'; 

    public function __construct() {
        
        if (empty($_GET['path'])) {
            $name = ucfirst($this->defaultControllerName); 
            $contPath = "App\\controllers\\" . $name . 'Controller';
            $methodName = $this->defaultMethodName;

            $controller = new $contPath();
            $controller->$methodName();
        } else {
            $path = filter_var($_GET['path'], FILTER_SANITIZE_URL);
            $arrayOfPath = $path ? explode("/", $path) : [];
            $methodName = $this->defaultMethodName;
            if ($arrayOfPath) {
                $name = ucfirst($arrayOfPath[0]); 
                $contPath = "App\\controllers\\" . $name . 'Controller'; 
                if (!empty($arrayOfPath[1])) {
                    $methodName = $arrayOfPath[1];
                }
            } 
        }
        if (class_exists($contPath)) {
            $controller = new $contPath();
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                
                if (method_exists($controller, $methodName)) {
                    call_user_func([$controller, $methodName], $_POST);
                 } 
            } else {
                if (method_exists($controller, $methodName)) {
                   call_user_func([$controller, $methodName]);
                } 
            }
        }
    }
}