<?php

namespace App\Core;

use App\Core\Request;

class Router
{
    public array $routes;

    public function __construct(
        //public Request $request
    )
    {
    }

    public function addRouter(string $method, string $path, mixed $callback): void
    {
        $this->routes[$method][$path] = $callback;
    }

    public function resolve()
    {
        //$method = $this->request->getMethod();
        //$path = $this->request->getPath();

        //$callback = $this->routes[$method][$path];

        return 'new app';
    }
}
