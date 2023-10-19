<?php 

    namespace Router;

    class Router 
    {
        protected static $routes = [];

        public static function add(string $uri, string $method, string $controller) : void
        {
            self::$routes[] = [
                'uri' => $uri,
                'method' => $method,
                'controller' => $controller,
            ];
        }

        public static function get(string $uri, string $controller) : void 
        {
            self::add($uri, 'GET', $controller);
        }

        public static function post($uri, $controller) : void
        {
            self::add($uri, 'POST', $controller);
        }

        public static function route(string $uri, string $method)
        {
            foreach(self::$routes as $route) {
                if($route['uri'] == $uri && $route['method'] == $method) {
                    return require_once $route['controller'];
                }
            }

            http_response_code(404);
            header('Location: /erro404');
            exit;
        }
    }

?>