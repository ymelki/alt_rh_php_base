<?php

require_once __DIR__.'/../../function.php';

function getProduit(){
    $PDO=connect_bd();
   

    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM product";

    // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
    // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
    $resultat = $PDO->prepare($requete1);
    $resultat->execute();
     
    $mesproduits=$resultat->fetchAll();
    

    return  $mesproduits;

}
?>