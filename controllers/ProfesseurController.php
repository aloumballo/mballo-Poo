<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller{

    public function affecterClasse(){

    }
    public function listerProfesseur(){
        $prof=Professeur::findAll();
        $data=[
            "titre"=>"Liste des Professeurs",
            "prof"=>$prof
        ];
        $this->render('professeur/listerProfesseur.html.php',$data);
        

    }

}