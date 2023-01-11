<?php include "header.php"; ?>
<div class="card-group">

<?php var_dump($mesproduits); 
foreach ($mesproduits as $mes) { ?>

    <div class="card">
        <div class="card-body">
        <h5 class="card-title"><?= $mes['title']?></h5>
        <p class="card-text"><?= $mes['description']?></p>
        </div>
        <div class="card-footer">
        <small class="text-muted"><?= $mes['price']?></small>
        <a href=/voir?id=<?=$mes['id']?>>Voir</a>
        <a href=/delete_produit?id=<?=$mes['id']?>>Supprimer</a>

        </div>
    </div> 
    <?php } ?>


</div>