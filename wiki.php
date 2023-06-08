<?php
    include('functions.php');
    $pageactive = "wiki.php";
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