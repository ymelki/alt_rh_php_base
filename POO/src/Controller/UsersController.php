<?php 
function afficher_users(){
    // 1 . RECUPERER LE TABLEAU DE USER
    require_once __DIR__.'/../Entity/Users.php';
    $mesusers=getUsers();
    // 2 RENVOYER LA VUE QUI POURRA MANIPULER LE TABLEAU DE PRODUITS
    include __DIR__.'/../../templates/users.php';
    }


    function delete_users(){
        // 1 . RECUPERER LE TABLEAU DE PRODUITS
        require_once __DIR__.'/../Entity/Users.php';
        deleteUser($_GET['id']);
        // 2 RENVOYER LA VUE QUI POURRA MANIPULER LE TABLEAU DE PRODUITS
        header("Location: index.php/users");
    }

    function afficher_un_user(){
        require_once __DIR__.'/../Entity/Users.php';
        $user=getUnUser($_GET['id']);
        include __DIR__.'/../../templates/un_user.php';


    }

?>