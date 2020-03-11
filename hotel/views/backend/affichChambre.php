
<?php ob_start(); ?>


<h2 class="text-center">Liste des chambres</h2>
  
  <table class="table table-striped text-center">
    <thead class="">
      <tr>
        <th>Num Chambre</th>
        <th>Prix</th>
        <th>Nombre lits</th>
        <th>Nombre personnes</th>
        <th>Confort</th>
        <th>Images</th>
        
        <th>Actions</th>
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d){ ?>
      <tr>
        <td><?=$d->getNumChambre() ?></td>
        <td><?=$d->getPrix() ?></td>
        <td><?=$d->getNbLits() ?></td>
        <td><?=$d->getNbPers() ?></td>
        <td><?=$d->getConfort() ?></td>
        <td><img src="./assets/images/<?=$d->getImage() ?>" width="100" alt=""></td>
        
        <td>
            <p>
                <a href="./index.php?action=list_details&id=<?=$d->getNumChambre();?>" class="btn btn-info">Infos</a>
                <a href="./index.php?action=edit_cha&id=<?=$d->getNumChambre()?>" class="btn btn-success">Editer</a>
                <a onclick="return confirm('Etes-vous sure ?')"  href="index.php?action=sup_cha&id=<?=$d->getNumChambre()?>&image=<?=$d->getImage()?>" class="btn btn-danger">Supprimer</a>
            </p>
        </td>

      </tr>
        <?php } ?>
      
    </tbody>
  </table>




<?php 
$contenu = ob_get_clean();

require_once('template.php');

?>