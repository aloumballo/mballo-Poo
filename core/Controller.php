<?php

namespace App\Core;

class Controller
{

    protected Request $Request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function render(string $path, array $data = [])
    {
        // session_unset();
        $data["Constantes"] = Constantes::class;
        $data["request"] = $this->request;
        // dd(Session::is_connect());
        if (Session::is_connect()) {
            $session = new Session();
            // $role = new Role($session);
            // dd(Role::isAC());
        }

        ob_start();
        extract($data);
        //dd(Constantes::ROOT()."templates/".$path);

        require_once(Constantes::ROOT() . "templates/" . $path);
        $content_for_views = ob_get_clean();
        // var_dump(Constantes::ROOT());die;
        require_once(Constantes::ROOT() . "templates/layout/base.html.php");
    }
    public function redirecToRoute($uri)
    {
        header("location:" . Constantes::WEB_ROOT . $uri);
    }
}