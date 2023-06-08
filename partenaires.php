<?php
    include('functions.php');
    $pageactive = "partenaires.php";

    // Récupérer le rôle de l'utilisateur connecté
    $userRole = ""; // Remplacer par la logique pour obtenir le rôle de l'utilisateur actuel

    // Vérifier le rôle de l'utilisateur et définir les autorisations
    $canAddRemove = false;
    switch ($userRole) {
        case "Manager":
        case "Directeur":
        case "Directrice":
        case "Administrateur":
            $canAddRemove = true;
            break;
        default:
            $canAddRemove = false;
            break;
    }
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

<!-- Section Partenaires -->
<section id="partenaires" class="mt-5">
  <div class="container">
    <h2>Partenaires</h2>
    <div class="row" id="cardContainer">
      <div class="col-md-4" id="card1">
        <div class="card h-100">
          <img src="images/ubisoft.png" class="w-100 card-img-top" alt="Logo Partenaire 1">
          <div class="card-body">
            <h5 class="card-title">Ubisoft</h5>
            <p class="card-text">Ubisoft est un éditeur de jeux vidéo français, connu pour des franchises telles que Assassin's Creed, Far Cry et Watch Dogs.</p>
            <button onclick="removeCard('card1')">Supprimer</button>
          </div>
        </div>
      </div>
      <div class="col-md-4" id="card2">
        <div class="card h-100">
          <img src="images/logitech.png" class="w-100 card-img-top" alt="Logo Partenaire 2">
          <div class="card-body">
            <h5 class="card-title">Logitech</h5>
            <p class="card-text">Logitech est un fabricant d'équipements informatiques et périphériques, spécialisé dans les souris, claviers et casques gaming.</p>
            <button onclick="removeCard('card2')">Supprimer</button>
          </div>
        </div>
      </div>
      <div class="col-md-4" id="card3">
        <div class="card h-100">
          <img src="images/ea.png" class="w-100 card-img-top" alt="Logo Partenaire 3">
          <div class="card-body">
            <h5 class="card-title">Electronic Arts</h5>
            <p class="card-text">Electronic Arts est une société américaine de développement et d'édition de jeux vidéo, célèbre pour des franchises comme FIFA, Battlefield et The Sims.</p>
            <button onclick="removeCard('card3')">Supprimer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Liste déroulante pour ajouter des cartes -->
<select id="cardSelection">
  <option value="ubisoft">Ubisoft</option>
  <option value="logitech">Logitech</option>
  <option value="ea">Electronic Arts</option>
  <option value="cisco">Cisco</option>
  <option value="epicgames">Epic Games</option>
  <option value="activision">Activision</option>
</select>
<button onclick="addSelectedCard()">Ajouter une carte</button>

<!-- Inclure les fichiers JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Script JavaScript pour ajouter/supprimer des cartes -->
<script>
  function addSelectedCard() {
    var selectElement = document.getElementById('cardSelection');
    var selectedCardId = selectElement.value;
    var container = document.getElementById('cardContainer');

    // Créer la nouvelle carte en fonction de la sélection
    var newCard = document.createElement('div');
    newCard.className = 'col-md-4';
    newCard.id = selectedCardId;

    var imgElement = document.createElement('img');
    imgElement.className = 'w-100 card-img-top';
    imgElement.src = 'images/' + selectedCardId + '.png';
    imgElement.alt = 'Logo ' + selectedCardId;

    var cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    var titleElement = document.createElement('h5');
    titleElement.className = 'card-title';
    titleElement.textContent = selectElement.options[selectElement.selectedIndex].text;

    var descriptionElement = document.createElement('p');
    descriptionElement.className = 'card-text';


    var removeButton = document.createElement('button');
    removeButton.textContent = 'Supprimer';
    removeButton.onclick = function() {
      removeCard(selectedCardId);
    };

    cardBody.appendChild(titleElement);
    cardBody.appendChild(descriptionElement);
    cardBody.appendChild(removeButton);

    newCard.appendChild(imgElement);
    newCard.appendChild(cardBody);

    // Ajouter la nouvelle carte au conteneur
    container.appendChild(newCard);
  }

  function removeCard(cardId) {
    var card = document.getElementById(cardId);
    card.parentNode.removeChild(card);
  }
</script>

</body>
</html>
