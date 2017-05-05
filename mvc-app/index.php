<?php
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS);
define('VIEW_DIR', ROOT . 'View' . DS);

spl_autoload_register(function($className) {
    $file = ROOT . str_replace('\\', DS, "{$className}.php");
    
    if (!file_exists($file)) {
        throw new \Exception("{$file} not found");
    }
    
    require_once $file;
});

\Library\Session::start();

$request = new \Library\Request();
$route = $request->get('route', 'default/index'); // $_GET['route']

// todo: защита от :) если нету слеша в значении
$route = explode('/', $route);

$controller = 'Controller\\' . ucfirst($route[0]) . 'Controller';
$action = $route[1] . 'Action';

$controller = new $controller(); // Controller\DefaultController

if (!method_exists($controller, $action)) {
    throw new Exception("{$action} not found");
}

$content = $controller->$action($request);

require VIEW_DIR . 'layout.phtml';

var_dump($controller, $action);