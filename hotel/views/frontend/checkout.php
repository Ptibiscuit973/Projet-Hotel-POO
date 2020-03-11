<?php
ob_start();

?>

<div class="card" style="width:400px">
  <img class="card-img-top" src="./assets/images/<?= $image ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Achat du vehicule <?= $modele ?></h4>
    
    <p class="card-text">Modele : <?= $modele ?></p>
    <p class="card-text">Prix : <?= $prix ?> €</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

<form action="" method="POST">
<input type="hidden" value="<?= $id ?>" name="id">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_U5FwMowKGnYUluWpV2t8oMGw00wOud0WAS"
    data-name="Concessionnaire"
    data-description="Vehicules de dernieres generations"
    data-amount="10"
    data-locale="auto"
    data-currency="eur">
  </script>
</form>

<?php
$contenu = ob_get_clean();
require_once('./views/backend/gabarit.php');
?>