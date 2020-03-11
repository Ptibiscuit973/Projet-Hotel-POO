<?php ob_start() ?>


<div class="container">
<h3 class="text-center">Liste des chambres</h3>
    <p class="text-right">
    
    </p>
    <form action="" method="post">
    <div class="input-group  mb-1 justify-content-end ">
        <input type="search" class="form-control col-4 text-center" name="mcle" id="" placeholder="rechercher">
        <button type="submit">
            <i class="fa fa-search">rechercher</i>
        </button>
    </div>
    </form>
<div class="container">
    <div class="row">

        <?php
foreach($data as $d){


        ?>


<div class="card col-6">
  <img class="card-img-top" height="400" src="./assets/images/<?=$d->getImage(); ?>" alt="Card image">
  <div class="card-body text-center ">
    <h4 class="card-title">Chambre : <?=$d->getNumChambre() ?></h4>
    <p><?=$d->getNbLits() ?> lit(s)</p>
    <p>Pour <?=$d->getNbPers(); ?> personnes</p>
    <p>Confort : <?=$d->getConfort() ?></p>
    <p class="card-text"><?=$d->getDescription() ?></p>
    <p><b> Prix : <?=$d->getPrix() ?> € / nuit</b></p>
    <a href="index.php?action=details&numChambre=<?= $d->getNumChambre() ?>" class="btn btn-primary" >details</a>


  </div>
  </div>


    <?php } ?>
</div>
</div>
</div>
<?php 
$contenu = ob_get_clean();
require_once('./views/backend/template.php'); 
?>