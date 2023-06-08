<?php
    include('functions.php');
    $pageactive = "Qui sommes-nous.php";
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
    <div class="carousel-item">
      <img src="images/logo.jpg" class="d-block w-100" alt="Image 2">
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

<!-- Section Qui sommes-nous ? -->
<section id="qui-sommes-nous" class="mt-5">
  <div class="container">
    <h2 class="text-center">Qui sommes-nous ?</h2>
    <div class="row">
      <div class="col-md-6">
        <div id="carouselQuiSommesNous" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselQuiSommesNous" data-slide-to="0" class="active"></li>
            <li data-target="#carouselQuiSommesNous" data-slide-to="1"></li>
            <li data-target="#carouselQuiSommesNous" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/equipe.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="images/equipe2.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="images/equipe3.jpg" class="d-block w-100" alt="Image 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselQuiSommesNous" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#carouselQuiSommesNous" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Notre entreprise</h3>
        <p>Pixel Master est une entreprise spécialisée dans le développement de jeux vidéo. Depuis notre création, nous nous efforçons de proposer des expériences de jeu uniques et innovantes.</p>
        <p>Nous sommes fiers de notre équipe talentueuse composée de designers, développeurs, artistes et professionnels de l'industrie du jeu vidéo. Ensemble, nous travaillons à créer des jeux captivants qui repoussent les limites de l'imagination.</p>
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
