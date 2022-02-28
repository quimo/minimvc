<?php
namespace Helpers;
class Router {
    public static function getController($conn) {
        $request = $_SERVER['REQUEST_URI'];
        $baseUrl = \Helpers\Config::getBaseUrl();
        $path = str_replace($baseUrl, '', $request);
        $routes = require_once __DIR__ . '/../routes/routes.php';
        $found = false;
        foreach($routes as $route => $controller) {
            if ($path === $route) {
                self::executeController($controller, $conn);
                $found = true;
                break;
            }
        }
        if (!$found) {
            self::executeController($routes['404']);
        }
    }
    protected static function executeController($controller, $conn = null) {
        list($class, $method) = explode('@', $controller);
        $controller = new $class();
        $controller->$method($conn);
    }
}