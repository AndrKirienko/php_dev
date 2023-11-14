<?php

namespace App\Core;

class Application
{

    public Router $router;

    //public Request $request;

    public function __construct(
        //$router = new App\Router
        // public Request $request = new Request
    )
    {
    }

    public function addRouter(string $method, string $path, mixed $callback): void
    {
        //$this->router->addRouter(($method,$path, $callback))
    }

    public function run()
    {
        return $this->router->resolve();
    }
}
