<?php

abstract class Model {

    protected $table;
    protected $pdo;



    public function __construct()
    {
            // 1 Connexion à la BD 
            include __DIR__.'/../Database.php';
            $this->pdo=Database::getPdo(); 
    }


    function delete($id){
         // Récupère les données de la table produits
        $requete1 = " DELETE FROM $this->table WHERE id = ".$id;
    
        $stmt= $this->pdo->prepare($requete1);
        $stmt->execute(); 
    }
 
    function getEntity($id){
     

        // Récupère les données de la table produits
        $requete1 = "SELECT * FROM $this->table where id=$id";

        // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
        // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
        $resultat = $this->pdo->prepare($requete1);
        $resultat->execute();
        
        $Entity=$resultat->fetch();
        

        return  $Entity;

    }




function getEntities(){
    

    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM $this->table";

    // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
    // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
    $resultat = $this->pdo->prepare($requete1);
    $resultat->execute();
     
    $entities=$resultat->fetchAll();
    

    return  $entities;

}
 
}