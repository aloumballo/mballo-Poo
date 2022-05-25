<?php

namespace App\controller;

use App\Core\Controller;
use App\Core\Session;
use App\Model\User;

class SecurityController extends Controller
{

    public function authentification()
    {
        // var_dump($_SERVER['REQUEST_URI']);
        // die();
        //1-Affichage du formulaire de connexion=>GET
        if ($this->request->isGet()) {
            session_start();
            session_unset();
            $this->render('security/login.html.php');
        }
        if ($this->request->isPost()) {
            extract($_POST);
            // $login =  $_POST['login'];
            // $password =  $_POST['password'];
            //echo $login . " " . $password;

            if (User::findUserByLoginAndPassword($login, $password)) {
                $user = User::findUserByLoginAndPassword($login, $password);
                $data = [
                    "titre" => "lister les etudiants",
                    "user" => $user
                ];
                $session = new Session();
                $session->set("user-connect", $user);
                $session->set("user", $user);

                // dd($_SESSION['user']->role);

                // $this->redirecToRoute("le");
                $this->render("layout/nav.html.php");
            } else {
                $this->redirecToRoute("login");
            }

            // session_start();
            // $_SESSION["user"]="ok";
            // $this->render("etudiant/lister.html.php");
        }
        //2-traitement apres soumission => POST
    }
    public function deconnexion()
    {
        // session_unset($_SESSION['user-connect']);


        $this->redirecToRoute("login");
    }
}