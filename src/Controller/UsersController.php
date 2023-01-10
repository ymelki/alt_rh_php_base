<?php 
function afficher_users(){
    // 1 . RECUPERER LE TABLEAU DE USER

    require_once __DIR__.'/Entity/Users.php';
    $mesusers=getUsers();
    // 2 RENVOYER LA VUE QUI POURRA MANIPULER LE TABLEAU DE PRODUITS
    include __DIR__.'/../../templates/users.php';
    }
?>