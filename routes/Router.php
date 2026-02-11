<?php

class Router {
    private $routes = [];
    
    public function add($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }
    
    public function get($path, $controller, $action) {
        $this->add('GET', $path, $controller, $action);
    }
    
    public function post($path, $controller, $action) {
        $this->add('POST', $path, $controller, $action);
    }
    
    public function dispatch() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        // Remove o diretório base da URI
        $basePath = str_replace('/public', '', dirname($_SERVER['SCRIPT_NAME']));
        if ($basePath !== '/') {
            $requestUri = str_replace($basePath, '', $requestUri);
        }
        $requestUri = str_replace('/public', '', $requestUri);
        
        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $this->matchPath($route['path'], $requestUri)) {
                $controllerName = $route['controller'];
                $actionName = $route['action'];
                
                require_once __DIR__ . '/../app/controllers/' . $controllerName . '.php';
                
                $controller = new $controllerName();
                $controller->$actionName();
                return;
            }
        }
        
        // 404 Not Found
        http_response_code(404);
        echo "404 - Página não encontrada";
    }
    
    private function matchPath($routePath, $requestPath) {
        return $routePath === $requestPath;
    }
}
