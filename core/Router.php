<?php
//ici c'est les chemins exemple quand je mets / login je pars a la page accueil c'est ici que c gérer
namespace App\Core;

use App\Core\Session;
use App\Controller\SecurityController;
use App\Exception\RouteNotFoundException;

class Router
{
    private Request $request;

    public function __construct()
    {
        $this->request = new Request;
    }
    private array $routes = [];
    public function route(string $uri, array $action)
    {
        $this->routes[$uri] = $action;
    }

    public function resolve()
    {
        //var_dump($this->request->getUri()[0]);

        $uri = "/" . $this->request->getUri()[0]; //[0]

        /* dd($uri); */

        if (isset($this->routes[$uri])) {
            $route = $this->routes[$uri];
            [$ctrClass, $action] = $route;


            if (class_exists($ctrClass) && method_exists($ctrClass, $action)) {
                $ctrl = new $ctrClass($this->request); //$ctrl=new SecurityController()
                // $ctrl->{$action()};//$ctrl->authentificatio()
                //ici je definit le tb ou toute les pages qui n'on pas besoin de connexion se trouve dans $free
                $free = ["SecurityController/authentification", "*"];
                $freeTest = explode("\\", $ctrl::class)[2] . "/" . $action; //retourne securityController/authentification
                if (in_array("*", $free) || in_array($freeTest, $free)) {
                    $ctrl->$action();
                } elseif (Session::is_connect()) {
                    $ctrl->$action();
                } else {
                    throw new RouteNotFoundException();
                }
                $ctrl->$action(); /* $free=["SecurityController/authentification"]; */


                // call_user_func(array($ctrl, $action));
            } else {
                throw new RouteNotFoundException();
            }
        } /* else { */
        // $obj = new SecurityController($this->request);
        // call_user_func(array($obj,"authentification"));
        //   throw new RouteNotFoundException();
        //header("location:" . Constantes::WEB_ROOT . 'login');
        /* } */
    }
}