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
 <?php pagenavbar('Accueil'); ?>

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
    <td>
      <form method="post" action="suppr.php">
        <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
        <button type="submit" class="btn btn-danger">Supprimer</button>
      </form>
    </td>
  </tr>
<?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<div class="container">
  <h2 class="text-center">Ajouter un utilisateur</h2>

  <form method="post" action="ajout.php">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required><br>

    <label for="userid">Identifiant :</label>
    <input type="text" name="userid" id="userid" required><br>

    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" required><br>

    <label for="role">Rôle :</label>
<select name="role" id="role" required>
  <option value="admin">Admin</option>
  <option value="manager">Manager</option>
  <option value="direction">Direction</option>
  <option value="salaries">Salariés</option>
</select><br>


    <input class="mt-2"type="submit" value="Soumettre">
  </form>
</div>



<!-- carrousel -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <!-- Le reste du code du carrousel... -->
</div>

<!-- Section Accueil -->
<section id="accueil" class="mt-5">
  <div class="container">
    <h1>Présentation de l'entreprise</h1>
    <p>Notre société, représentée par M. Gatel et M. Menguy, souhaite explorer les opportunités de communication et d’innovation autour d’un projet de portail web. Notre approche consiste à concevoir un site complet permettant de valoriser les activités de l’entreprise et d’apporter une solution de partage de fichiers entre nos collaborateurs.</p>
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
