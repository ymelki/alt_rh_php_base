<?php

require_once __DIR__.'/../../function.php';
function deleteUser($id){
    $PDO=connect_bd(); 
    // Récupère les données de la table produits
    $requete1 = " DELETE FROM user WHERE id = ".$id;

    $stmt= $PDO->prepare($requete1);
    $stmt->execute(); 
}

function newUser(){
    
}


function getUnUser($id){
    $PDO=connect_bd();
   

    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM user where id=$id";

    // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
    // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
    $resultat = $PDO->prepare($requete1);
    $resultat->execute();
     
    $user=$resultat->fetch();
    

    return  $user;

}

function getUsers(){
    $PDO=connect_bd();
   

    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM user";

    // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
    // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
    $resultat = $PDO->prepare($requete1);
    $resultat->execute();
     
    $users=$resultat->fetchAll();
    

    return  $users;

}
?>