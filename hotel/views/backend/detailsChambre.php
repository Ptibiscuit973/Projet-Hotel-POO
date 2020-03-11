<?php
ob_start();
?>
<div class="container">
<h3 class="text-center">Details de chambre</h3>
<div class=" card-deck">
<?php foreach($data as $d){ ?>
<div class="card">
  <img class="card-img-top" src="./assets/images/<?= $d->getImage() ?>" alt="Card image">
  <div class="card-body text-center">
    <h4 class="card-title">Chambre : <?= $d->getNumChambre() ?></h4>
    <p><?=$d->getNbLits(); ?> lit(s)</p>
    <p>Pour <?=$d->getNbPers(); ?> personnes</p>
    <p>Confort : <?=$d->getConfort(); ?></p>
    <p class="card-text"><?=$d->getDescription(); ?></p>
    <p><b> Prix : <?=$d->getPrix(); ?> € / nuit</b></p>
    <a href="" id="numChambre" class="btn btn-warning" >Reserver</a>
    <a href="" class="btn btn-danger" >Retour</a>
    
  </div>
  </div>

<?php
    }
?>
</div>
</div>


<?php
$contenu = ob_get_clean();

require_once('template.php');
?>