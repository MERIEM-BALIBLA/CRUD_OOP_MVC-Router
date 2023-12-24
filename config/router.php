<?php

namespace Routes;
class Route
{
    private string $controller = 'NS\Controller\Teamcontroller';
    private string $method = 'readAction';
    private array $params = array();

    public function __construct()
    {
        $this->Sender();
    }

    public function Sender():void
    {
        $uri= $_SERVER['REQUEST_URI'] ?? '';
        $uri = explode('/', trim(strtolower($uri), '/'));
        unset($uri[0]);
        if (!empty($uri[1])) {
            $controller = ucwords($uri[1] ) . 'Controller';
            unset($uri[1]);
            $controller = "NS\Controllers\\" . $controller;
            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                include '../app/View/error.php';
                exit;
            }
        }

        $class = $this->controller;
        $objetController = new $class;

        if (isset($uri[2])) {

            $method = $uri[2];
            unset($uri[2]);

            if (method_exists($objetController, $method)) {
                $this->method = $method;
            } else {
                include '../app/View/error.php';
                // echo "error not fined";
                exit;
            }
        }

        if (isset($uri[3])) {
            $this->params = array_values($uri);
        }

        call_user_func_array([$objetController, $this->method], $this->params);
    }
}