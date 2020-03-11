<?php
ob_start();
?>


<div class="container">
<form method="post" enctype="multipart/form-data">
<div class="text-center"><h3><b>Ajout de reservations</b></h3></div>
  <div class="row">
  
  
    <div class="col">
    <label for="numClient">num Client :</label>
      <input type="number" class="form-control" placeholder="numClient" name="numClient">
    </div>
    <div class="col">
    <label for="numChambre">Num Chambre :</label>
      <input type="number" class="form-control" placeholder="numChambre" name="numChambre">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="dateArrivee">Date arrivée :</label>
      <input type="date" class="form-control" placeholder="dateArrivee" name="dateArrivee">
    </div>
    <div class="col">
    <label for="dateDepart">Date départ :</label>
      <input type="date" class="form-control" placeholder="dateDepart" name="dateDepart">
    </div>
  </div>
  
      <br>
      <button type="submit"  name="submit" class="form-control btn btn-success">Ajouter</button>
    </div>
  
</form>
</div>


<?php 
$contenu = ob_get_clean();
//require_once('./gabarit.php');
require_once('./views/backend/template.php');
 ?>