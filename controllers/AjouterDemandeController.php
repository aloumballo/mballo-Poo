<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;
use App\Model\Professeur;

class AjouterDemandeController extends Controller
{

    public function listerDemande()
    {
        $this->render('demande/demande.html.php');
    }

    public function inscription()
    {

        if ($this->request->isGet()) {
            $this->render("demande/demande.html.php");
        } else {
            // dd($_POST);
            extract($_POST);
            // $prof= new Demande();
            // $prof->setMotif($motif);
            // $prof->setDate($date);
            //  $prof->setEtat($etat);
            /*  $prof->setRole('ROLE_PROFESSEUR'); */
            $prof->insert();
        }
    }
}