

<?php

function connect_bd(){
    // 1 Connexion à la BD
    $user = "root";
    $pass = "";
    $dnspdo = 'mysql:dbname=boutique;host=localhost;charset=utf8';

    $PDO = new PDO($dnspdo, $user, $pass);
    return $PDO;
}

function getEntite($entite, $id){
    $PDO=connect_bd();
    $filtre="";
    if ($id==0){
        $filtre="";
    }
    else {
        $filtre=" where id = ".$id;
    }

    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM ".$entite."".$filtre;

    // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
    // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
    $resultat = $PDO->prepare($requete1);
    $resultat->execute();
    if ($id==0){
    $mesproduits=$resultat->fetchAll();
    }
    else {
        $mesproduits=$resultat->fetch();
    }

    return  $mesproduits;

}

?>