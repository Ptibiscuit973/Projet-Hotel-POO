

<?php ob_start(); ?>
<div class="container">
<form method="post" enctype="multipart/form-data">
<h3 class="text-center"><b>Edition</b></h3>

<div hidden><?= $data->getNumChambre()?></div>
  <div class="row">
    <div class="col">
    <label for="prix">Prix</label>
      <input type="number" class="form-control" id="prix" value="<?= $data->getPrix()?>" name="prix">
    </div>
    <div class="col">
    <label for="nbLits">Nombre de lits</label>
      <input type="number" class="form-control" value="<?= $data->getNbLits() ?>" name="nbLits">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="nbPers">Nombre de personnes</label>
      <input type="number" class="form-control" id="nbPers" value="<?= $data->getNbPers() ?>" name="nbPers">
    </div>
    <div class="col">
    <label for="confort">Confort : </label>
      <input type="text" class="form-control" value="<?= $data->getConfort() ?>" name="confort">
    </div>
  </div>
  <div class="row">
    <div class="col">
        <label for="image">Telechargez image : </label>
        <img src="./assets/images/<?= $data->getImage() ?>" alt="image" width="200" height="200" class="img-fluid img-thumbnail">
        <input type="file" class="form-control-file border" name="image">
    </div>
    <div class="col">
    <label for="description">Description : </label>
      <textarea class="form-control" name="description"><?= $data->getDescription() ?></textarea>

      <br>
      <button type="submit" name="submit" class="btn btn-success">Valider</button>
    </div>
  </div>
</form>

</div>
<?php
$contenu = ob_get_clean();

require_once('template.php');
?>
