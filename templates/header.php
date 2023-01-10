<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SUPER OUTIL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/catalogue">Liste des produits</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/users">Liste des users</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Deconnexion</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <?php if (isset($_SESSION["user"])){
                echo "Vous etes connecte en tant que ".$_SESSION["user"];
            } else {
                echo " pense à t'inscrire ! ";
            } ?>
        </div>
    </div>
    </nav>
    <div class="container">
    
</body>
</html>