<?php

namespace App\Controller;

use App\Core\Controller;

use App\Model\RP;

class RPController extends Controller
{

    public function listerRP()
    {
        if ($this->request->isGet()) {
            $rp = RP::findAll();
            $data = [
                "titre" => "RP",
                "RP" => $rp
            ];
            $this->render('etudiant/lister.html.php',);
        }
    }
    /* 
    public function inscription() */
    public function ajoutRP()
    {
        if ($this->request->isGet()) {
            $this->render("RP/addRp.html.php");
        } else {
            // dd($_POST);
            extract($_POST);
            $rp = new RP();
            $rp->setNomComplet($nomComplet);
            $rp->setLogin($login);
            $rp->setPassword($password);

            $rp->insert();
        }
    }
}