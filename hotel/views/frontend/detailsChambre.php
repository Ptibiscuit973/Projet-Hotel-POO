<?php
ob_start();
?>
<div class="container">
<h3 class="text-center">Details de chambre</h3>
<div class=" card-deck">

<div class="card">
  <img class="card-img-top"  name="image" src="./assets/images/<?= $data->getImage() ?>" alt="Card image">
  <div class="card-body text-center">
    <h4 class="card-title" name="numChambre" >Chambre : <?= $data->getNumChambre() ?></h4>
    <p name="nbLits" ><?=$data->getNbLits(); ?> lit(s)</p>
    <p name="nbPers" >Pour <?=$data->getNbPers(); ?> personnes</p>
    <p name="confort" >Confort : <?=$data->getConfort(); ?></p>
    <p class="card-text" name="description" ><?=$data->getDescription(); ?></p>
    <p name="prix" ><b> Prix : <?=$data->getPrix(); ?> € / nuit</b></p>
    <a href="./index.php?action=resClient&numChambre=<?=$data->getNumChambre()?>" id="numChambre" class="btn btn-warning" >Reserver</a>
    <a href="" class="btn btn-danger" >Retour</a>
    
  </div>
  </div>


</div>
</div>


<?php
$contenu = ob_get_clean();

require_once('./views/backend/template.php');

?>