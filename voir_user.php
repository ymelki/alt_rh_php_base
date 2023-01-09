<?php
include "header.php";
require_once "function.php";
$monproduit=getEntite("user",$_GET['id']);
 
?>


<div class="card-group"> 
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $monproduit['id']?></h5>
            <p class="card-text"><?= $monproduit['email']?></p>
            </div>
            <div class="card-footer">  
            </div>
        </div>  
</div>
</div>