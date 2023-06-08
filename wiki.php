<?php
include('functions.php');
$pageactive = "wiki.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Wiki - Comment fonctionne notre site</title>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Barre de navigation -->
<?php pageheader(); ?>
<?php pagenavbar($pageactive); ?>
<!-- Barre de navigation -->

<div class="container mt-4">
  <h1>Wiki - Comment fonctionne notre site</h1>
  <p>Voici une explication détaillée du fonctionnement de notre site :</p>

  <h2>Annuaire de l'entreprise</h2>
  <p>L'annuaire de l'entreprise est une fonctionnalité qui permet d'afficher les informations sur les employés de l'entreprise. Il affiche une liste de personnes avec leurs détails tels que leur nom, leur poste, leurs coordonnées, etc. L'annuaire peut être mis à jour en ajoutant, modifiant ou supprimant des entrées à partir du module d'administration.</p>

  <h2>Gestion des utilisateurs</h2>
  <p>La gestion des utilisateurs concerne la création, la modification et la suppression des comptes utilisateurs sur notre site. Elle permet également d'attribuer des rôles et des permissions aux utilisateurs, ce qui détermine leur accès à certaines fonctionnalités. Les administrateurs ont généralement un accès complet, tandis que les autres utilisateurs ont des permissions limitées en fonction de leur rôle.</p>

  <h2>Partage de fichiers</h2>
  <p>Notre site offre également une fonctionnalité de partage de fichiers entre les collaborateurs. Les utilisateurs peuvent télécharger des fichiers dans des dossiers spécifiques et accorder des permissions d'accès aux autres utilisateurs ou groupes d'utilisateurs. Cela facilite la collaboration et le partage d'informations au sein de l'entreprise.</p>

  <h2>Connexion et déconnexion avec les sessions</h2>
  <p>Notre site utilise le concept de sessions pour gérer l'authentification des utilisateurs. Lorsqu'un utilisateur se connecte avec ses identifiants, une session est créée pour cette session de navigation. Cette fonction permet de stocker des informations spécifiques à cet utilisateur, telles que son identifiant ou son rôle.</p>
  <p>Lorsque l'utilisateur se déconnecte, la session est détruite, ce qui supprime toutes les informations associées à cet utilisateur. Cela garantit que l'accès aux fonctionnalités protégées est restreint uniquement aux utilisateurs connectés.</p>

</div>

<?php pagefooter(); ?>
<!-- Inclure les scripts JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>