<?php
ob_start()
?>
<div class="container">
<h3 class="text-center">inscription</h3>


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

    
  </div>
  </div>


</div>
</div>

<div><h2>Enregistrement</h2></div>
<form>
<div class="form-group">
    <label for="nom">nom</label>
    <input type="text" class="form-control" name="nom" placeholder="nom">
  </div>
  <div class="form-group">
    <label for="prenom">prenom</label>
    <input type="text" class="form-control" name="prenom" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="tel">telephone</label>
    <input type="number" class="form-control" name="tel" placeholder="numero de tel">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="datedarrivee">date d'arrivée</label>
    <input type="date" class="form-control" name="datedarrivee" placeholder="date d'arrivée">
  </div>
  <div class="form-group">
    <label for="dateDepart">date de Départ</label>
    <input type="date" class="form-control" name="datedepart" placeholder="date de départ">
  </div>


  <button type="submit" name="reserver" class="btn btn-primary">reserver</button>
</form>
</div>

<?php
$contenu = ob_get_clean();
require_once('./views/backend/template.php');
?>