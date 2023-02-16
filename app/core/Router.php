<?php

namespace app\core;

use app\core\RoutersFilter;

class Router
{
    public static function run()
    {
        try{
            $routerRegisted = new RoutersFilter;
            $router = $routerRegisted->get();
    
            $controller = new Controller;
            $controller->execute($router);
    
            dd($router);
        }catch(\Throwable $th){
            echo $th->getMessage();
        }
        
    }
}