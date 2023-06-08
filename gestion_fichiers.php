<?php include 'functions.php'; ?>
<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des fichiers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
     <?php pageheader(); ?>
    <?php pagenavbar('gestion_fichiers.php'); ?>

    <div class="container mt-5">
        <h1 class="mb-4">Gestion des fichiers</h1>

        <h2>Ajouter un fichier</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fichier">Sélectionner un fichier</label>
                <input type="file" class="form-control-file" id="fichier" name="fichier" required>
            </div>
            <button type="submit" class="btn btn-primary" name="ajouterFichier">Ajouter</button>
        </form>

        <h2 class="mt-4">Liste des fichiers</h2>
        <?php
        $fichiers = listerFichiers($dossier);
        if (!empty($fichiers)) {
            echo '<ul class="list-group">';
            foreach ($fichiers as $fichier) {
                echo '<li class="list-group-item">' . $fichier . '
                      <form method="POST" class="d-inline-block">
                        <input type="hidden" name="fichier" value="' . $fichier . '">
                        <button type="submit" class="btn btn-danger btn-sm float-right" name="supprimerFichier">Supprimer</button>
                      </form>
                      </li>';
            }
            echo '</ul>';
        } else {
            echo '<p class="mt-3">Aucun fichier trouvé.</p>';
        }
        ?>
    </div>
    <?php pagefooter(); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
