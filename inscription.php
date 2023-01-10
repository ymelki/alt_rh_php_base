<?php
include "header.php";
require_once "function.php";


if (  (isset($_POST['email']) && (isset($_POST['pwd'])))) {
    // 1 . Recupération des variables POST
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    echo "l'inscription est en cours !";


    // 2. Enregistrement de ces données en B.D dans la table user
    $PDO=connect_bd();

    $sql = "INSERT INTO user (id, email, roles, password) VALUES (?,?,?,?)";
    $stmt= $PDO->prepare($sql);
    $stmt->execute([NULL,
                    $email, 
                    "[]",
                    password_hash($password, PASSWORD_BCRYPT)
    ]); 
}

?> 



<p class="h1">Inscription</p>
<form action="/inscription.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="pwd">
  </div>
   
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>

<a href="/inscription.php">Inscription</a>
<a href="/authentification.php">Authentification</a>