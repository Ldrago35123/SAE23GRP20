<?php
    include('functions.php');
    $pageactive = "activites.php";
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
 <?php pagenavbar($pageactive); ?>
<!-- Barre de navigation -->


<!-- Section Activités -->
<section id="partenaires" class="mt-5">
  <div class="container">
    <h2>Nos Activités</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card h-100">
          <img src="images/bf.jpg" class="w-100 card-img-top" alt="Logo Partenaire 1">
          <div class="card-body">
            <h5 class="card-title">Jeux d'action</h5>
            <p class="card-text">Battlefield 5 est un jeu de tir à la première personne qui se déroule pendant la Seconde Guerre mondiale. Les joueurs participent à des combats intenses sur divers champs de bataille, avec des graphismes impressionnants et une expérience multijoueur immersive.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="images/ff15.png" class="w-100 card-img-top" alt="Logo Partenaire 2">
          <div class="card-body">
            <h5 class="card-title">Jeux de rôle</h5>
            <p class="card-text">Final Fantasy 15 est un jeu de rôle japonais qui suit les aventures du prince Noctis et de ses amis dans un vaste monde ouvert. Le jeu offre un mélange d'action en temps réel et de stratégie, avec des combats épiques, une histoire captivante et des graphismes magnifiques.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="images/R6.jpg" class="w-100 card-img-top" alt="Logo Partenaire 3">
          <div class="card-body">
            <h5 class="card-title">Jeux de stratégie</h5>
            <p class="card-text">Rainbow Six Siege est un jeu de tir tactique en équipe où la coordination et la stratégie sont essentielles. Les joueurs se divisent en attaquants et défenseurs, utilisant des opérateurs spécialisés et des compétences uniques pour mener à bien des missions intenses et compétitives. La communication et la planification sont cruciales pour réussir à prendre le dessus sur l'adversaire.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  <?php pagefooter(); ?>
  

<!-- End of .container -->

<!-- Inclure les fichiers JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>
