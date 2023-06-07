<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si un fichier a été soumis
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Vérifier s'il y a des erreurs lors du téléchargement
        if ($file['error'] === UPLOAD_ERR_OK) {
            // Spécifier le dossier de destination pour les fichiers téléchargés
            $uploadDir = 'Fichieruploads/';
            $uploadFile = $uploadDir . basename($file['name']);

            // Déplacer le fichier téléchargé vers le dossier de destination
            if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                echo 'Le fichier a été téléchargé avec succès.';
            } else {
                echo 'Une erreur s\'est produite lors du téléchargement du fichier.';
            }
        } else {
            echo 'Une erreur s\'est produite lors du téléchargement du fichier : ' . $file['error'];
        }
    }
}

?>



<!--BOUTON CHANGEMENTS DE PAGES-->
<button id="bouton-page">Changer de page</button>

    <script>
        document.getElementById("bouton-page").addEventListener("click", function() {
            window.location.href = "files.php";
        });
    </script>