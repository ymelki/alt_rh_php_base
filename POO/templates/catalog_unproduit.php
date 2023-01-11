<?php
include "header.php";
  
?>


<div class="card-group"> 
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $unproduit['title']?></h5>
            <p class="card-text"><?= $unproduit['description']?></p>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?= $unproduit['price']?></small>
             </div>
        </div>  
</div>
</div>