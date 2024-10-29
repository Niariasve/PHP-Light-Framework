<?php

namespace Controllers;

use MVC\Router;

class ExampleController {
    public static function example(Router $router) {
        $router->render("example/example", [
            
        ]);
    }
}