<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;
use App\Model\Professeur;

class AjouterProfController extends Controller
{

    public function listerP()
    {
        $this->render('personne/liste.html.php');
    }

    public function inscription()
    {

        if ($this->request->isGet()) {
            $this->render("addUser/ajouterProf.html.php");
        } else {
            // dd($_POST);
            extract($_POST);
            $prof = new Professeur();
            $prof->setNomComplet($nomComplet);
            $prof->setGrade($grade);
            $prof->setRole('ROLE_PROFESSEUR');
            $prof->insert();
        }
    }
}