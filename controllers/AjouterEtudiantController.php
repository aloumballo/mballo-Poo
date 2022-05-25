<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;
use App\Model\Etudiant;
use App\Core\Model;

class AjouterEtudiantController extends Controller{
    
   public function listerEtudiant(){
       if($this->request->isGet()){
          $etu=Etudiant::findAll();
        $data=[
            "titre"=>"Liste des Etudiants",
            "etu"=>$etu
        ];
        $this->render('etudiant/lister.html.php',$data);
        
       }

   }

   public function inscription(){

    if($this->request->isGet()){
        $this->render("addUser/ajouterEtudiant.html.php");
    }else{
        // dd($_POST);
        extract($_POST);
        $prof= new Etudiant();
        $prof->setNomComplet($nomComplet);
        $prof->setAdresse($adresse);
        $prof->setSexe($sexe);
        $prof->setMatricule($matricule);
        $prof->setLogin($login);
        $prof->setPassword($password);
      
        $prof->insert();
    }



   }
}