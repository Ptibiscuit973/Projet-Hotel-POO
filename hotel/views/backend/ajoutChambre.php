<?php
ob_start();
?>


<div class="container">
<form method="post" enctype="multipart/form-data">
<div class="text-center"><h3><b>Ajout de Chambres</b></h3></div>
  <div class="row">
  
  
    <div class="col">
    <label for="prix">Prix</label>
      <input type="number" class="form-control" id="prix" placeholder="Enter price" name="prix">
    </div>
    <div class="col">
    <label for="nbLits">Nombre de lits</label>
      <input type="number" class="form-control" placeholder="Entrez le nombre de lits" name="nbLits">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="nbPers">Nombre de personnes</label>
      <input type="number" class="form-control" id="nbPers" placeholder="Entrez le nombre de personnes" name="nbPers">
    </div>
    <div class="col">
    <label for="confort">Confort : </label>
      <input type="text" class="form-control" placeholder="Entrez le type de confort" name="confort">
    </div>
  </div>
  <div class="row">
    <div class="col">
        <label for="image">Telechargez image : </label>
        <input type="file" class="form-control-file border" name="image"> 
    </div>
    <div class="col">
    <label for="description">Description : </label>
      <textarea class="form-control" placeholder="Entrez descriptif" name="description"></textarea>

      <br>
      <button type="submit"  name="submit" class="btn btn-success">Ajouter</button>
    </div>
  </div>
</form>
</div>


<?php 
$contenu = ob_get_clean();
//require_once('./gabarit.php');
require_once('./views/backend/template.php');
 ?>