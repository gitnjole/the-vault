<?php

namespace Core;

class Router
{
    private array $routes = [];

    public function addRoute(string $uri, string $controller, string $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get(string $uri, string $controller)
    {
        $this->addRoute($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller)
    {
        $this->addRoute($uri, $controller, 'POST');
    }

    public function put(string $uri, string $controller)
    {
        $this->addRoute($uri, $controller, 'PUT');
    }

    public function delete(string $uri, string $controller)
    {
        $this->addRoute($uri, $controller, 'DELETE');
    }

    public function patch(string $uri, string $controller)
    {
        $this->addRoute($uri, $controller, 'PATCH');
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    private function abort()
    {
        http_response_code(404);

        require base_path("views/elements/404.php");

        die();
    }
}