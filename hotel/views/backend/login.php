<?php ob_start(); ?>


<div class="container">
<h1 class="text-center">Page d'identification</h1>
<form action="" method="post">
  <div class="form-group">
    <label for="login">Login :</label>
    <input type="text" class="form-control" placeholder="Enter Login" name="login">
  </div>
  <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="pass">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <div><?php if(isset($erreur)){echo $erreur;} ?></div>
</form>


<?php $contenu = ob_get_clean(); 
require_once('./views/backend/template.php'); 
?>