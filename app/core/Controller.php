<?php

namespace app\core;

use Exception;

class Controller
{    
    public function execute(string $router)
    {
        if(!str_contains($router, '@'))
        {
            throw new Exception("A rota está registrada com o formato errado");
        }
        list($controller, $method) = explode('@', $router);
        $nameSpace = "app\controllers\\";
        $controllerNamespace = $nameSpace.$controller;       

        if(!class_exists($controllerNamespace))
        {
            throw new Exception("Controller ".$controller." não existe");
        }

        $controller = new $controllerNamespace;
        if(!method_exists($controller, $method))
        {
            throw new Exception("Método ".$method." não existe");
        }

        $controller->$method();



    }

}