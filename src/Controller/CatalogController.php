<?php 
function afficher_produits(){
    // 1 . RECUPERER LE TABLEAU DE PRODUITS
    require_once __DIR__.'/Entity/Produit.php';
    $mesproduits=getProduit();
    // 2 RENVOYER LA VUE QUI POURRA MANIPULER LE TABLEAU DE PRODUITS
       include __DIR__.'/../../templates/catalog.php';
    }


    function delete_produits(){
        // 1 . RECUPERER LE TABLEAU DE PRODUITS
        require_once __DIR__.'/Entity/Produit.php';
        deleteProduit($_GET['id']);
        // 2 RENVOYER LA VUE QUI POURRA MANIPULER LE TABLEAU DE PRODUITS
        header("Location: index.php/catalogue");
    }
?>