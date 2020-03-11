
<?php ob_start(); ?>

<div class="container">
<h2 class="text-center">Liste des reservations</h2>
  <a href="./index.php?action=ajout_resa" class="btn btn-warning text-right">Ajouter reservation</a>
  <table class="table table-striped text-center">
    <thead class="">
      <tr>
        <th>Num Client</th>
        <th>num Chambre</th>
        <th>date d'arrivée</th>
        <th>date de départ</th>
        <th>Actions</th>
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d){ ?>
      <tr>
        <td><?=$d->getNumClient()?></td>
        <td><?=$d->getNumChambre() ?></td>
        <td><?=$d->getDateArrivee() ?></td>
        <td><?=$d->getDateDepart() ?></td>

        <td>
            <p>
                <a href="./index.php?action=edit_resa&numChambre=<?=$d->getNumChambre()?>&numClient=<?=$d->getNumClient()?>" class="btn btn-success">Editer</a>
                <a onclick="return confirm('Etes-vous sure ?')"  href="./index.php?action=sup_resa&numClient=<?=$d->getNumClient()?>&numChambre=<?=$d->getNumChambre()?>" class="btn btn-danger">Supprimer</a>
            </p>
        </td>

      </tr>
        <?php } ?>
      
    </tbody>
  </table>

  </div>


<?php 
$contenu = ob_get_clean();

require_once('template.php');

?>