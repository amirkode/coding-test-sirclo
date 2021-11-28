<?php

namespace CodingTest\Sirclo\SimpleMVC\Cores;

class Router {
    private static $routes = [];

    public static function addRoute($method, $path, $controller, $function) {
        array_push(self::$routes, [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ]);
    }

    public static function init() {        
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes as $route) {;
            $pathPattern = "#^" . $route['path'] . "$#";
            if(preg_match($pathPattern, $path, $params) && $method == $route['method']) {
                $function = $route['function'];
                $controller = new $route['controller'];
                array_shift($params);
                call_user_func_array([$controller, $function], $params);

                return;
            }
        }

        http_response_code(404);
        echo 'ROUTE NOT FOUND';
    }
}