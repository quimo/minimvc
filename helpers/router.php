<?php
namespace Helpers;
class Router {
    public static function getController() {
        $request = $_SERVER['REQUEST_URI'];
        $baseUrl = \Helpers\Config::getBaseUrl();
        $path = str_replace($baseUrl, '', $request);
        $routes = require_once __DIR__ . '/../routes/routes.php';
        foreach($routes as $route => $controller) {
            if ($path === $route) {
                self::executeController($controller);
                break;
            }
        }
    }
    protected static function executeController($controller) {
        list($class, $method) = explode('@', $controller);
        $controller = new $class();
        $controller->$method();
    }
}