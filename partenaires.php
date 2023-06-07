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


<!-- Carrousel -->
<!-- Carrousel -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="chemin/vers/image1.jpg" class="d-block w-100" alt="Bienvenue chez Pixel Master">
      <div class="carousel-caption d-flex justify-content-center align-items-center">
        <div class="text-center">
          <h5>Bienvenue chez Pixel Master</h5>
          <p>L'entreprise de jeux vidéo</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="chemin/vers/image2.jpg" class="d-block w-100" alt="Image 2">
      <div class="carousel-caption d-flex justify-content-center align-items-center">
        <div class="text-center">
          <!-- Ajoutez du texte ou des informations supplémentaires pour la deuxième image si nécessaire -->
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

  <!-- Section Qui sommes-nous ? -->
  <section id="qui-sommes-nous" class="mt-5">
    <div class="container">
      <h2>Qui sommes-nous ?</h2>
      <p>Présentation de l'entreprise (dirigeants, membres principaux de l’équipe).</p>
    </div>
  </section>

  <!-- Section Histoire -->
  <section id="histoire" class="mt-5">
    <div class="container">
      <h2>Histoire</h2>
      <p>Description de l’évolution de l’entreprise au fil du temps (changement de présidence, acquisition d’entreprise, développement des sites géographiques …).</p>
    </div>
  </section>

  <!-- Section Activités -->
  <section id="activites" class="mt-5">
    <div class="container">
      <h2>Activités</h2>
      <p>Présentation des différentes activités de l'entreprise.</p>
    </div>
</section>
<!-- Section Partenaires -->
<section id="partenaires" class="mt-5">
  <div class="container">
    <h2>Partenaires</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="logo-partenaire1.png" class="card-img-top" alt="Logo Partenaire 1">
          <div class="card-body">
            <p class="card-text">Commentaire sur le partenariat avec Partenaire 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="logo-partenaire2.png" class="card-img-top" alt="Logo Partenaire 2">
          <div class="card-body">
            <p class="card-text">Commentaire sur le partenariat avec Partenaire 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="logo-partenaire3.png" class="card-img-top" alt="Logo Partenaire 3">
          <div class="card-body">
            <p class="card-text">Commentaire sur le partenariat avec Partenaire 3.</p>
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
