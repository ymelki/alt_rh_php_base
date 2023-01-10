<?php

include "header.php";

require_once "function.php";


?>

<?php

if (  (isset($_POST['email']) && (isset($_POST['pwd'])))) {
    // 1 . Recupération des variables POST
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    
    // 2. Verifier si en B.D. le user et le MDP sont correct
    // je vais recuperer le user qui est renseigné dans le form
    // recuperer les donncée 
    // je vais comparer le MDP renvoyé avec celui renseigné
    // en utilisant le cryptage

     // Récupère les données de la table produits
     $requete1 = "SELECT * FROM user WHERE email = '$email'   ";
     $PDO=connect_bd();

     // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
     // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
     $resultat = $PDO->prepare($requete1);
     $resultat->execute();
     $user=$resultat->fetch();
     var_dump($user);

     // si le mot de passe renseigné dans le form == mdp de la BD
     // if ($password == $user['password'])
     if (password_verify(   $password   , $user['password'])) {
         $_SESSION["user"]=$email;   
         header("Location: index.php");
     
        // stocke dans une variable de session une donnée 
        // qui persistera jusqu'a que on lui disent de plus exister
        // sesion_start() a ne pas oublier
     } 
     else {
        echo 'Password OR EMAIL is not valid!';
     }

     /*if (($mail==$rows[0]['email']) && (password_verify($mdp, $rows[0]['pwd'] ))   ){
        $_SESSION['user']=$rows[0]['email'];
         return true;
        */

    

}

var_dump($_SESSION);
?>

<p class="h1">Authentification</p>
<form action="/authentification.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="pwd">
  </div>
   
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>

<a href="/inscription.php">Inscription</a>
<a href="/authentification.php">Authentification</a>