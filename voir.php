<?php
include "header.php";
require_once "function.php";
$monproduit=getEntite("product",$_GET['id']);
 
?>


<div class="card-group"> 
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $monproduit['title']?></h5>
            <p class="card-text"><?= $monproduit['description']?></p>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?= $monproduit['price']?></small>
            <a href=voir.php?id=<?=$monproduit['id']?>>Voir</a>
            </div>
        </div>  
</div>
</div>