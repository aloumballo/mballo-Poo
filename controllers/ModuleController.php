<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;
use App\Model\Module;

class ModuleController extends Controller{
    
   public function listerModule(){
      $this->render('demande/demande.html.php');

   }

    public function ajoutModule(){
        if($this->request->isGet()){
            $this->render("module/ajouterModule.html.php");
        }else{
            // dd($_POST);
         /*    die('in module');  */
        extract($_POST);
        $prof= new Module();
        $prof->setLibelleModule($libellemodule);
       
       /*  $prof->setRole('ROLE_PROFESSEUR'); */
        $prof->insert();
    }




   }
}