<?php
include "header.php";
require_once "function.php";
 

?>

<p class="h1">Bienvenue sur la home .</p>

<?php

 
             
$mesproduits=getEntite("product",0);
 

var_dump($mesproduits); 
?>

<div class="card-group">

    <?php foreach ($mesproduits as $mes) { ?>
 
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $mes['title']?></h5>
            <p class="card-text"><?= $mes['description']?></p>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?= $mes['price']?></small>
            <a href=voir.php?id=<?=$mes['id']?>>Voir</a>
            </div>
        </div> 
        <?php } ?>

  
</div>
</div>