<?php
    include('functions.php');
    $pageactive = "accueil.php";
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



<!-- Carrousel -->
<!-- Carrousel -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/logo.jpg" class="d-block w-100" alt="Bienvenue chez Pixel Master">
      <div class="carousel-caption d-flex justify-content-center align-items-center">
        <div class="text-center">
          <h5>Bienvenue chez Pixel Master</h5>
          <p>L'entreprise de jeux vidéo</p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>

  <!-- Section Accueil -->
  <section id="accueil" class="mt-5">
    <div class="container">
      <h1>Présentation de l'entreprise</h1>
      <p>Notre société, représentée par M. Gatel et M. Menguy, souhaite explorer les opportunités de communication et d’innovation autour d’un projet de portail web. Notre approche consiste à concevoir un site complet permettant de valoriser les activités de l’entreprise et d’apporter une solution de partage de fichiers entre nos collaborateurs.</p>
    </div>
  </section>

<!-- Section Partenaires -->
<section id="partenaires" class="mt-5">
  <div class="container">
    <h2>Partenaires</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="ubisoft.png" class="card-img-top" alt="Logo Partenaire 1">
          <div class="card-body">
            <p class="card-text">Partenaire 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="logitech.png" class="card-img-top" alt="Logo Partenaire 2">
          <div class="card-body">
            <p class="card-text">Partenaire 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="ea.png" class="card-img-top" alt="Logo Partenaire 3">
          <div class="card-body">
            <p class="card-text">Partenaire 3.</p>
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