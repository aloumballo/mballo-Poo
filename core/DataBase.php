<?php

namespace App\Core;

class DataBase
{
    private \PDO|null $pdo = null;
    //nous connecte au niveau de la BD
    public function connexionDB(): void
    {

        // $this->pdo= new \PDO('mysql:dbname=POO_ODC;host=localhost;charset=utf8', "root", "root");



        try {
            $this->pdo = new \PDO("mysql:dbname=poo_odc_c_4;host=localhost:3307", "root", "");
            // $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            //
        } catch (\PDOException $execption) {

            echo  $execption->getMessage();

            exit('Erreur de Connexion');
        }
    }
    public function closeConnexion(): void
    {
        $this->pdo = null;
    }
    //on lui passe une requete et une donnée apres il prepare la donné et exécute la donner  de la requete c a d on mets des ? au niveau des paramettre 
    public function executeSelect(string $sql, array $data = [], bool $single = false): object|array|null
    {

        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        if ($single) {
            //si s$single = true
            $result = $query->fetch(\PDO::FETCH_OBJ);
            if ($query->rowCount() == 0) return null;
        } else {
            //si s$single = false
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function executeUpdate(string $sql, array $data = []): int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        //insert => retourner l'id generer
        return $query->rowCount();
    }
}