<?php
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS . '..' . DS); // ../
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
$container = new \Library\Container();
$container->set('router', new \Library\Router());

$route = $request->get('route', 'default/index'); // $_GET['route']

// todo: защита от :) если нету слеша в значении
$route = explode('/', $route);

$controller = 'Controller\\' . ucfirst($route[0]) . 'Controller';
$action = $route[1] . 'Action';

$controller = (new $controller())->setContainer($container); // Controller\DefaultController

if (!method_exists($controller, $action)) {
    throw new Exception("{$action} not found");
}

echo $controller->$action($request);