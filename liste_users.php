
<?php
include "header.php";
require_once "function.php";
 

?>

<p class="h1">Bienvenue sur la home .</p>

<?php

require_once "function.php";
             
$mesusers=getEntite("user",0);
 


?>

<div class="card-group">

    <?php foreach ($mesusers as $mes) { ?>
 
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $mes['id']?></h5>
            <p class="card-text"><?= $mes['email']?></p>
            </div>
            <div class="card-footer"> 
            <a href=voir_user.php?id=<?=$mes['id']?>>Voir</a>
            </div>
        </div> 
        <?php } ?>

  
</div>
</div>