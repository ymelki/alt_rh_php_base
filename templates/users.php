<?php include "header.php"; ?>
<div class="card-group">

<?php var_dump($mesusers); 
foreach ($mesusers as $mes) { ?>

    <div class="card">
        <div class="card-body">
        <h5 class="card-title"><?= $mes['id']?></h5>
        <p class="card-text"><?= $mes['email']?></p>
        </div>
        <div class="card-footer"> 
        </div>
    </div> 
    <?php } ?>


</div>