<?php
include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/logo.jpg" type="image/jpeg">
  <style>
    .list-group {
      position: fixed;
      top: 9%;
      left: 1%;
      width: 12%;
      height: 10%;
      opacity: 0.90;
    }

  </style>
</head>
<body>
<!-- Barre de navigation -->
 <?php
  pagenavbar("Histoire");
  ?>
<div class="row">
  <div class="col-sm-2">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">La naissance</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
    </div>
  </div>
  <div class="col-sm-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

      <p id="list-item-1">
       <div class="card bg-dark text-white" >
  <img src="images/maison.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">La naissance</h5>
    <p class="card-text">Après avoir acquis une solide expertise en développement et en design, David Gatel a pris la décision audacieuse de se lancer dans l'aventure de la création de jeux. Avec une vision claire en tête, il a commencé modestement depuis sa chambre, utilisant ses compétences techniques et son talent artistique pour donner vie à un petit jeu.</p>
  </div>
</div>
</p>

      <p id="list-item-2"><div class="card bg-dark text-white" >
  <img src="images/maison.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Premier jeux</h5>
    <p class="card-text">
      Armé d'une détermination sans faille et d'une volonté d'innover, Alex a travaillé sans relâche, perfectionnant son jeu et repoussant les limites de sa créativité. Les nuits blanches et les défis techniques n'ont jamais entamé sa passion et son engagement envers son projet.
    </p>
  </div>
</div>
      <p id="list-item-3"><div class="card bg-dark text-white" >
  <img src="images/maison.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dévellopement de l'entreprise</h5>
    <p class="card-text">
      Cet engouement initial a été le point de départ de la fondation de notre entreprise. Nous avons rassemblé une équipe de professionnels talentueux, partageant tous une passion commune pour l'innovation et les jeux vidéo de qualité.
    </p>
  </div>
</div></p>

      <p id="list-item-4"><div class="card bg-dark text-white" >
  <img src="images/maison.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Le futur</h5>
    <p class="card-text">Notre succès repose sur notre engagement à toujours rester à la pointe de l'innovation, à anticiper les tendances du marché et à créer des jeux qui suscitent l'engouement et l'enthousiasme de notre communauté de joueurs.</p>
  </div>
</div></p>
    </div>
  </div>
</div>


<style>
    #progress-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 10px;
      height: 100%;
      background-color: white;
    }

    #progress-fill {
      width: 100%;
      background-color: darkgreen;
      transition: height 1s;
    }
  </style>

  <div id="progress-bar">
    <div id="progress-fill"></div>
  </div>

  <!-- Votre contenu de page ici -->

  <script>
    var progressBar = document.getElementById('progress-fill');

    window.addEventListener('scroll', function() {
      var windowHeight = window.innerHeight;
      var documentHeight = document.documentElement.scrollHeight;
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;

      progressBar.style.height = scrollPercent + '%';
    });
  </script>

<!--page footer -->
<?php pagefooter(); ?>

<!-- Inclure les fichiers JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
