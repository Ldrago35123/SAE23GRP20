<!DOCTYPE html>
<html>
<head>
  <title>Liste des fichiers</title>
</head>
<body>
  <h1>Liste des fichiers</h1>

  <?php
  $targetDir = 'uploads/';
  $files = scandir($targetDir);
  $files = array_diff($files, array('.', '..'));

  if (count($files) > 0) {
    echo '<ul>';
    foreach ($files as $file) {
      echo '<li><a href="' . $targetDir . $file . '">' . $file . '</a></li>';
    }
    echo '</ul>';
  } else {
    echo 'Aucun fichier trouvé.';
  }
  ?>

</body>
</html>