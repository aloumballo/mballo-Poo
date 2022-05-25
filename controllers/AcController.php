<?php

namespace App\Controller;

use App\Core\Controller;

use App\Model\AC;

class AcController extends Controller
{

    public function listerAC()
    {
        if ($this->request->isGet()) {
            $ac = AC::findAll();
            $data = [
                "titre" => "AC",
                "AC" => $ac
            ];
            $this->render('etudiant/lister.html.php',);
        }
    }
    /* 
    public function inscription() */
    public function ajoutAC()
    {
        if ($this->request->isGet()) {
            $this->render("AC/addAC.html.php");
        } else {
            // dd($_POST);
            extract($_POST);
            $ac = new AC();
            $ac->setNomComplet($nomComplet);
            $ac->setLogin($login);
            $ac->setPassword($password);

            $ac->insert();
        }
    }
}