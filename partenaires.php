<?php
    include('functions.php');
    $pageactive = "partenaires.php";
?>











<!DOCTYPE html>
<html>
<head>
  <title>Présentation de l'entreprise</title>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Barre de navigation -->
 <?php pageheader(); ?>
 <?php pagenavbar('Partenaires'); ?>
<!-- Barre de navigation -->

<!-- Section Partenaires -->
<section id="partenaires" class="mt-5">
  <div class="container">
    <h2>Partenaires</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card h-100">
          <img src="images/ubisoft.png" class="w-100 card-img-top" alt="Logo Partenaire 1">
          <div class="card-body">
            <h5 class="card-title">Ubisoft</h5>
            <p class="card-text">Ubisoft est un éditeur de jeux vidéo français, connu pour des franchises telles que Assassin's Creed, Far Cry et Watch Dogs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="images/logitech.png" class="w-100 card-img-top" alt="Logo Partenaire 2">
          <div class="card-body">
            <h5 class="card-title">Logitech</h5>
            <p class="card-text">Logitech est un fabricant d'équipements informatiques et périphériques, spécialisé dans les souris, claviers et casques gaming.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="images/ea.png" class="w-100 card-img-top" alt="Logo Partenaire 3">
          <div class="card-body">
            <h5 class="card-title">Electronic Arts</h5>
            <p class="card-text">Electronic Arts est une société américaine de développement et d'édition de jeux vidéo, célèbre pour des franchises comme FIFA, Battlefield et The Sims.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Remove the container if you want to extend the Footer to full width. -->



  <?php pagefooter(); ?>
  

<!-- End of .container -->

<!-- Inclure les fichiers JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>
