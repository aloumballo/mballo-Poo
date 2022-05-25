<?php
namespace App\controller;
use App\Model\Classe;
use App\Core\Controller;
use App\Core\Request;


class ClasseController extends Controller{

    
    public function listerClasse(){

       // die('in lister classe');
       $classe=Classe::findAll();
        $data=[
            "titre"=>"Liste des Classe",
            "classe"=>$classe
        ];

         $this->render('classe/listerClasse.html.php',$data);

    }
    
    public function creerClasse(){

        

    if($this->request->isGet()){
        $this->render("classe/addClasse.html.php");
    }else{
     //   die('in classe ajouter');
      
        extract($_POST);
        $class= new Classe();
        $class->setLibelle($libelle);
        $class->setFiliere($filiere);
        $class->setNiveau($niveau);
        $class->insert();
    }
    
}
}