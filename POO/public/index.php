<?php
// ----------------------ROUTEUR------------------------------ //

/**
 *     // MVC
 * 1. Routeur => Recuperer la requete et renvoyé vers le bon code personnalisé
 * 2. Controlleur => Continuer le code
 *   : 1. optionnel : recuperer les données
 *   : 2. Renvoyer la vue
 * 3. La vue qui va afficher 
 *   : 1. optionnel : les données
 *   : 2. du code HTML / CSS / JavaScript 
 */ 
$path=$_SERVER['PATH_INFO'];

if (!isset($_SERVER['PATH_INFO'])) {
    $path="/accueil";
}



if ($path=='/accueil'){
    echo "vous etes sur la page d'accueil";
    include __DIR__.'/../src/Controller/HomeController.php';
    page_accueil();
}

if ($path=='/contact_form_rempli'){
    echo "vous etes sur la page contact_form_rempli";
    include __DIR__.'/../templates/formulaire_rempli.php';
}
if ($path=='/newsletter_form_rempli'){
    echo "vous etes sur la page newsletter_form_rempli";
    include __DIR__.'/../templates/formulaire_rempli.php';
}
if ($path=='/catalogue'){
    echo "vous etes sur la page catalogue";
    include __DIR__.'/../src/Controller/CatalogController.php';
    afficher_produits();
 }

 if ($path=='/users'){ 
    echo "vous etes sur la page users";
    include __DIR__.'/../src/Controller/UsersController.php';
    afficher_users();
 }
 if ($path=='/voir_un_user'){ 
    include __DIR__.'/../src/Controller/UsersController.php';
    afficher_un_user();
 }

 if ($path=='/inscription'){
    echo "vous etes sur la page inscription";
 }

 if ($path=='/authentification'){
    echo "vous etes sur la page authentification";
 }

 if ($path=='/delete_produit'){
    include __DIR__.'/../src/Controller/CatalogController.php';
    delete_produits();
 }
 if ($path=='/delete_user'){
    include __DIR__.'/../src/Controller/UsersController.php';
    delete_users();
 }
 if ($path=='/voir'){
    include __DIR__.'/../src/Controller/CatalogController.php';
    afficherunproduit();
 }
