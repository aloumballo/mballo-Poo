<?php

use App\Controller\AcController;

use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\AjouterProfController;
use App\Controller\AjouterEtudiantController;
use App\Controller\AjouterDemandeController;
use App\Controller\ModuleController;
use App\Controller\RPController;


use App\Exception\RouteNotFoundException;

$router = new Router();
$router->route('/login', [SecurityController::class, "authentification"]);
$router->route('/logout', [SecurityController::class, "deconnexion"]);
$router->route('/classes', [ClasseController::class, "listerClasse"]);
$router->route('/add-classe', [ClasseController::class, "creerClasse"]);
$router->route('/personne', [PersonneController::class, "lister"]);
$router->route('/lp', [ProfesseurController::class, "listerProfesseur"]);
$router->route('/addprof', [AjouterProfController::class, "inscription"]);
$router->route('/addetu', [AjouterEtudiantController::class, "inscription"]);
$router->route('/le', [AjouterEtudiantController::class, "listerEtudiant"]);
$router->route('/adddemande', [AjouterDemandeController::class, "inscription"]);
$router->route('/de', [AjouterDemandeController::class, "listerDemande"]);
$router->route('/addmodule', [ModuleController::class, "ajoutModule"]);
$router->route('/modules', [ModuleController::class, "listerModule"]);
$router->route('/addac', [AcController::class, "ajoutAC"]);
$router->route('/ac', [AcController::class, "listerAC"]);
$router->route('/addrp', [RPController::class, "ajoutRP"]);
$router->route('/rp', [RPController::class, "listerRP"]);





// $router->resolve();


try {
    //essaie de resoude la route
    $router->resolve();
} catch (RouteNotFoundException $ex) {
    //Capture l'exception et affiche
    echo $ex->message;
}