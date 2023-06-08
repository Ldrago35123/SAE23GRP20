<?php
include('functions.php');

// Charger l'annuaire
$annuaire = chargerAnnuaire();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Présentation de l'entreprise</title>
  <!-- fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/logo.jpg" type="image/jpeg">
</head>
<body>
  
<!-- navbar -->
<?php pagenavbar('Annuaire'); ?>

<!-- Section Annuaire -->
<section id="annuaire" class="mt-5">
  <div class="container">
    <h2>Annuaire de l'entreprise</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Nom d'utilisateur</th>
          <th>Mot de passe</th>
          <th>Rôle</th>
          <!-- Ajoutez d'autres colonnes ici si nécessaire -->
        </tr>
      </thead>
      <tbody>
      <?php foreach ($annuaire['employes'] as $employe) : ?>
        <tr>
          <td><?php echo $employe['nom']; ?></td>
          <td><?php echo $employe['prenom']; ?></td>
          <td><?php echo $employe['email']; ?></td>
          <td><?php echo $employe['username']; ?></td>
          <td><?php echo $employe['password']; ?></td>
          <td><?php echo $employe['role']; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>
<?php pagefooter(); ?>

<!-- End of .container -->

<!-- fichiers JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
