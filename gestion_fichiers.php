<?php
session_start();

// Vérifier si l'utilisateur est connecté
$loggedIn = false;
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    $loggedIn = true;
    $loggedInUsername = $_SESSION['username'];
    $loggedInRole = $_SESSION['role'];
}



// Charger les données des utilisateurs depuis le fichier JSON
$usersData = file_get_contents('data/message.txt');
$users = json_decode($usersData, true);

// Vérifier les autorisations de l'utilisateur
function checkPermissions($loggedInRole, $file, $fileOwner, $fileRole)
{
    global $loggedInUsername; // Ajoutez cette ligne pour utiliser la variable globale

    if ($loggedInRole === 'admin') {
        // L'administrateur a tous les droits
        return true;
    } elseif ($loggedInRole === 'Salarié') {
        // Le salarié peut supprimer ses propres fichiers
        if ($fileOwner === $loggedInUsername && strpos($file, $loggedInUsername) !== false) {
            return true;
        }

        // Le salarié peut télécharger les fichiers de son groupe
        if ($fileRole === 'Salarié' && $fileOwner !== $loggedInUsername) {
            return true;
        }
    } elseif ($loggedInRole === 'Directeur') {
        // Le directeur a tous les droits sauf supprimer les fichiers de l'admin
        if ($fileRole !== 'admin') {
            return true;
        }
    }

    return false;
}


// Fonction pour vérifier les informations de connexion
function authenticate($username, $password)
{
    global $users;

    foreach ($users as $user) {
        if ($user['user'] === $username && $user['password'] === $password) {
            return true;
        }
    }

    return false;
}

// Traitement de la soumission du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticate($username, $password)) {
        // Authentification réussie
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $username;

        foreach ($users as $user) {
            if ($user['user'] === $username) {
                $_SESSION['role'] = $user['role'];
                break;
            }
        }

        $loggedIn = true;
        $loggedInUsername = $username;
        $loggedInRole = $_SESSION['role'];
    } else {
        // Authentification échouée
        $loginError = 'Nom d\'utilisateur ou mot de passe incorrect';
    }
}

// Traitement de la déconnexion
if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    $loggedIn = false;
    header('Location: acceuil.php');
    exit;
}

// Traitement du dépôt de fichiers
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $loggedIn && isset($_FILES['file']['name'])) {
    // Récupérer les informations sur le fichier
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileName = $_FILES['file']['name'];

    // Déplacer le fichier vers un emplacement souhaité
    $destination = 'uploads/' . $fileName;
    if (move_uploaded_file($fileTmp, $destination)) {
        // Ajouter les informations du fichier à la liste des fichiers déposés
        $uploadedFiles[] = array(
            'name' => $fileName,
            'owner' => $loggedInUsername,
            'role' => $loggedInRole
        );

        // Mettre à jour les fichiers déposés dans la session
        $_SESSION['files'] = $uploadedFiles;

        // Rediriger vers la page d'accueil après le dépôt du fichier
        header('Location: acceuil.php');
        exit();
    } else {
        // Gérer l'erreur de déplacement du fichier
        $uploadError = 'Une erreur s\'est produite lors du dépôt du fichier.';
    }
}

// Suppression du fichier
if ($loggedIn && $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['file'])) {
    $fileToDelete = $_GET['file'];

    // Rechercher le fichier dans la liste des fichiers déposés
    foreach ($uploadedFiles as $key => $file) {
        if ($file['name'] === $_GET['file']) {

            // Vérifier les autorisations avant de supprimer le fichier
            if (checkPermissions($loggedInRole, $file['name'], $file['owner'], $file['role'])) {
                // Supprimer le fichier du dossier "uploads"
                $filePath = 'uploads/' . $fileToDelete;
                unlink($filePath);

                // Supprimer le fichier de la liste des fichiers déposés
                unset($uploadedFiles[$key]);

                // Mettre à jour les fichiers déposés dans la session
                $_SESSION['files'] = $uploadedFiles;
            } else {
                // L'utilisateur n'est pas autorisé à supprimer ce fichier
                $deleteError = 'Vous n\'êtes pas autorisé à supprimer ce fichier';
            }

            break;
        }
    }

    // Rediriger vers la page d'accueil après la suppression
    header('Location: acceuil.php');
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Dépôt de fichiers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Dépôt de fichiers</h1>
        <?php if (!$loggedIn): ?>
            <!-- Formulaire de connexion -->
            <form method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?php if (isset($loginError)): ?>
                    <div class="alert alert-danger"><?php echo $loginError; ?></div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        <?php else: ?>
            <!-- Afficher l'utilisateur connecté -->
            <div class="alert alert-success">Connecté en tant que <?php echo $loggedInUsername; ?></div>

            <!-- Bouton de déconnexion permanent -->
                   <!-- Bouton de déconnexion permanent -->
        <a href="?logout" class="btn btn-danger">Déconnexion</a>

        <!-- Formulaire de dépôt de fichiers -->
<form method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="file">Choisir un fichier :</label>
<input type="file" class="form-control-file" id="file" name="file" required>
</div>
<button type="submit" class="btn btn-primary">Déposer</button>
</form>

                <?php
// Charger la liste des fichiers déposés depuis le dossier "uploads/"
$uploadedFiles = array();

$files = scandir('uploads/');
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $uploadedFiles[] = array(
            'name' => $file,
            'owner' => $loggedInUsername,
            'role' => $loggedInRole
        );
    }
}
?>

<?php if (count($uploadedFiles) > 0): ?>
    <!-- Afficher la liste des fichiers déposés -->
    <h3 class="mt-4">Fichiers déposés :</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Propriétaire</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($uploadedFiles as $file): ?>
                <tr>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo $file['owner']; ?></td>
                    <td>
                        <?php if (checkPermissions($loggedInRole, $file['name'], $file['owner'], $file['role'])): ?>
                            <a href="uploads/<?php echo urlencode($file['name']); ?>" class="btn btn-success">Télécharger</a>
                            <?php if ($loggedInRole !== 'admin'): ?>
                                <a href="?action=delete&file=<?php echo urlencode($file['name']); ?>" class="btn btn-danger">Supprimer</a>
                            <?php endif; ?>
                        <?php else: ?>
                            <span class="text-muted">Autorisations insuffisantes</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>



        <?php if (isset($deleteError)): ?>
            <!-- Afficher une erreur de suppression -->
            <div class="alert alert-danger"><?php echo $deleteError; ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
