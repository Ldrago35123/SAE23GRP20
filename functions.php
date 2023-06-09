<?php

function pageheader(){
    echo '
    <body>
        <div class="container-fluid p-5 bg-info p-3 text-white text-center">
            <!-- Bouton pour ouvrir la modal -->
            <button type="button" class="btn btn-primary" onclick="openModal()">Connexion</button>

            <!-- Modal de connexion -->
            <div id="loginModal" class="modal">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                        <button type="button" class="btn-close" onclick="closeModal()"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d\'utilisateur</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="loginBtn">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>';

    

    // Vérification si l'utilisateur est déjà connecté
    if(isset($_SESSION['user'])) {
        echo '<p>Bonjour '.$_SESSION['user'].', vous êtes connecté</p>';
        echo '<form method="post"><button type="submit" class="btn btn-primary" name="logoutBtn">Déconnexion</button></form>';
    }

    // Traitement de la connexion
    if(isset($_POST['loginBtn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(connexion($username, $password)) {
            echo '<div class="alert alert-success" role="alert">Connexion réussie !</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Nom d\'utilisateur ou mot de passe incorrect</div>';
        }
    }

    // Traitement de la déconnexion
    if(isset($_POST['logoutBtn'])) {
        deconnexion();
    }
    echo '</div></div></body>';
    echo '<script>
        function openModal() {
            document.getElementById("loginModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("loginModal").style.display = "none";
        }
    </script>';
}


// Fonctions Annuaire
function chargerAnnuaire() {
    $annuaire_json = file_get_contents('data/users2.json');
    $annuaire = json_decode($annuaire_json, true);
    return $annuaire;
  }
  
function trouverEmploye($annuaire, $id) {
    foreach ($annuaire['employes'] as $key => $employe) {
      if ($employe['id'] === $id) {
        return $key;
      }
    }
    return null;
  }  

function pagenavbar($pageactive){
    ?>
    <nav class="navbar navbar-expand-sm bg-secondary">
        <div class="container-fluid">
            <ul class="navbar-nav">
    <?php
        $affiche_page = array("accueil.php" => "Accueil", "Qui sommes-nous.php" => "Qui sommes nous ?", "histoire.php" => "Notre histoire", "activites.php" => "Nos activités", "partenaires.php" => "Partenaires", "wiki.php" => "Wiki", "gestion_fichiers.php" => "Fichiers", "gestionutilisateur.php"=>"Gestion des utilisateurs", "listeannuaire.php"=>"Annuaire");
        foreach($affiche_page as $key => $value){
        if($key == $pageactive){ ?>
            <li class="nav-item">
                <a class="nav-link active bg-white" href="<?php echo $key; ?>"><?php echo $value; ?></a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $key; ?>"><?php echo $value; ?></a>
            </li>
        <?php }
    }
    ?>
            </ul>
        </div>
    </nav>    
    <?php
}   
?> 

<?php

function pagefooter() {
    echo '
    <footer class="mt-5 text-white text-center text-lg-start bg-dark">
    <div class="container p-4">
      <div class="row mt-4">
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">A propos de nous</h5>
              <p>
              Entreprise concentrée sur son travail, en association avec les plus grand, nous avons l\'honneur de faire la gestion des jeux d\'actualités
              </p>
              <p>
              Nous espérons un avenir meilleur pour l\'univers du jeu vidéo
              </p>
<div class="mt-4">
                  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
                  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4 pb-1">Coordonnées</h5>

              <ul class="fa-ul" style="margin-left: 1.65em;">
              <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Saint-Malo, France</span>
              </li>
              <li class="mb-3">
<span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">pixelmaster@gmail.com</span>
              </li>
              <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+33 6 12 34 56 78</span>
              </li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Heures d\'ouverture</h5>
              <table class="table text-center text-white">
              <tbody class="fw-normal">
              <tr>
              <td>Lundi - Mardi:</td>
              <td>8h - 20h</td>
              </tr>
              <tr>
              <td>Vendredi - Samedi:</td>
              <td>8h - 18h</td>
              </tr>
              <tr>
              <td>Dimanche:</td>
              <td>9h - 12h</td>
              </tr>
              </tbody>
              </table>
          </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020
    <a class="text-white" href="https://mdbootstrap.com/%22%3EMDBootstrap.com</a>
    </div>
    </footer>';
}


function newUsers() {
    $users = array(
    "Dylan" => array("user" => "Dylan", "mdp" => "bonjour", "role" => "admin"),
    "Adam.S" => array("user" => "Adam.S", "mdp" => "bonjour", "role" => "Salarié"),
    "Zoé.D" => array("user" => "Zoé.D", "mdp" => "bonjour", "role" => "Salarié"),
    "Arthur.G" => array("user" => "Arthur.G", "mdp" => "bonjour", "role" => "Directeur"),
    "Jules.R" => array("user" => "Jules.R", "mdp" => "bonjour", "role" => "Salarié"),
    "Jules.Benzema" => array("user" => "Jules.Benzema", "mdp" => "bonjour", "role" => "Salarié"),
    "Adam.R" => array("user" => "Adam.R", "mdp" => "bonjour", "role" => "Manager"),
    "Lina.M" => array("user" => "Lina.M", "mdp" => "bonjour", "role" => "Salarié"),
    "Hugo.B" => array("user" => "Hugo.B", "mdp" => "bonjour", "role" => "Salarié"),
    "Zoé.G" => array("user" => "Zoé.G", "mdp" => "bonjour", "role" => "Salarié"),
    "Nathan.G" => array("user" => "Nathan.G", "mdp" => "bonjour", "role" => "Salarié"),
    "Julie.D" => array("user" => "Julie.D", "mdp" => "bonjour", "role" => "Manager"),
    "Lucas.S" => array("user" => "Lucas.S", "mdp" => "bonjour", "role" => "Salarié"),
    "Alice.S" => array("user" => "Alice.S", "mdp" => "bonjour", "role" => "Salarié"),
    "Gwenaelle.S" => array("user" => "Gwenaelle.S", "mdp" => "bonjour", "role" => "Administrateur"),
    "Raphaël.T" => array("user" => "Raphaël.T", "mdp" => "bonjour", "role" => "Administrateur"),
    "Jade.M" => array("user" => "Jade.M", "mdp" => "bonjour", "role" => "Salarié"),
    "Emma.Bertrand" => array("user" => "Emma.Bertrand", "mdp" => "bonjour", "role" => "Salarié"),
    "Gabriel.P" => array("user" => "Gabriel.P", "mdp" => "bonjour", "role" => "Salarié"),
    "Zoé.L" => array("user" => "Zoé.L", "mdp" => "bonjour", "role" => "Salarié"),
    "Louis.M" => array("user" => "Louis.M", "mdp" => "bonjour", "role" => "Salarié"),
    "Lola.J" => array("user" => "Lola.J", "mdp" => "bonjour", "role" => "Directrice"),
    "Louis.C" => array("user" => "Louis.C", "mdp" => "bonjour", "role" => "Manager"),
    "Nathan.M" => array("user" => "Nathan.M", "mdp" => "bonjour", "role" => "Salarié"),
    "Alice.D" => array("user" => "Alice.D", "mdp" => "bonjour", "role" => "Manager"),
    "Emma.Bernard" => array("user" => "Emma.Bernard", "mdp" => "bonjour", "role" => "Salarié"),
    "Lucas.J" => array("user" => "Lucas.J", "mdp" => "bonjour", "role" => "Administrateur"),
    "Raphaël.H" => array("user" => "Raphaël.H", "mdp" => "bonjour", "role" => "Salarié"),
    "Louise.S" => array("user" => "Louise.S", "mdp" => "bonjour", "role" => "Salarié"),
    "Jules.Bernard" => array("user" => "Jules.Bernard", "mdp" => "bonjour", "role" => "Manager"),
    "Lola.M" => array("user" => "Lola.M", "mdp" => "bonjour", "role" => "Salarié")
);

    // Convertir le tableau en format JSON
    $json = json_encode($users, JSON_PRETTY_PRINT);

    // Écrire le contenu JSON dans le fichier "users.json"
    $file = fopen("data/users.json", "w");
    fwrite($file, $json);
    fclose($file);

}

function addUser($usr, $mdp, $role){

    
    $json = file_get_contents('data/users.json'); // Récupérer les utilisateurs existants depuis le fichier JSON
    $users = json_decode($json, true);
    
    
    if (isset($users[$usr])) { // Vérifier si l'utilisateur existe déjà
        echo "Cet utilisateur existe déjà.";
    } else {
        
        $users[$usr] = array( // Ajouter le nouvel utilisateur au tableau
            "user" => $usr,
            "mdp" => $mdp,
            "role" => $role
        );
        
        
        $json = json_encode($users, JSON_PRETTY_PRINT); // Mettre à jour le fichier JSON
        $file = fopen("data/users.json", "w");// ouvre le fichier d'utilisateur dans le dossier data
        fwrite($file, $json);// écrit le contenue de la variable $json dans le fichier
        fclose($file);// ferme le fichier
        
        echo "L'utilisateur a été ajouté avec succès.";
    }
}

function deleteUser($username) {
    
    $json = file_get_contents("data/users.json"); // Charger le contenu du fichier JSON
    $users = json_decode($json, true); // Transformer le JSON en tableau associatif
    
    if(isset($users[$username])) { // Vérifier si l'utilisateur existe
        unset($users[$username]); // Supprimer l'utilisateur
        $json = json_encode($users, JSON_PRETTY_PRINT); // Enregistrer les changements dans le fichier JSON
        $file = fopen("data/users.json", "w");
        fwrite($file, $json);
        fclose($file);
        return true; // La suppression a réussi
    }
    else {
        return false; // L'utilisateur n'existe pas
    }
}

function deconnexion(){
    session_unset();
    session_destroy();
    header("Location: accueil.php");
    exit;
}

function connexion($usr, $mdp){
    $users = json_decode(file_get_contents("data/users.json"), true);

    if (isset($users[$usr])) { // Vérification si l'utilisateur existe dans la liste des utilisateurs
        $password = $users[$usr]['mdp'];

        if ($mdp === $password) { // Vérification si le mot de passe est correct (sans hachage)

            // Création de la session
            $_SESSION['user'] = $usr;
            $_SESSION['role'] = $users[$usr]['role'];
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function getUsers(){
    $users_file = file_get_contents("data/users.json"); // Lit le contenu du fichier JSON
    $users = json_decode($users_file, true); // Décode le contenu JSON en tableau associatif
    return $users;
  }

function findUsers($texte) {
    $users = getUsers();
    $matching_users = array();
    foreach ($users as $user) {
        if (strpos($user["user"], $texte) !== false) {
            array_push($matching_users, $user);
        }
    }
    return $matching_users;
}

session_start();

function listerFichiers($dossier)
{
    $fichiers = scandir($dossier);
    $fichiers = array_diff($fichiers, array('.', '..')); // Supprimer les fichiers '.' et '..'
    return $fichiers;
}

function ajouterFichier($dossier, $fichier)
{
    $destination = $dossier . '/' . $fichier['name'];
    if (move_uploaded_file($fichier['tmp_name'], $destination)) {
        echo '<div class="alert alert-success" role="alert">Le fichier a été ajouté avec succès</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Une erreur s\'est produite lors de l\'ajout du fichier</div>';
    }
}

function supprimerFichier($dossier, $fichier)
{
    $chemin = $dossier . '/' . $fichier;
    if (file_exists($chemin)) {
        if (unlink($chemin)) {
            echo '<div class="alert alert-success" role="alert">Le fichier a été supprimé avec succès</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Une erreur s\'est produite lors de la suppression du fichier</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Le fichier n\'existe pas</div>';
    }
}


$dossier = 'uploads'; // Dossier de stockage des fichiers

if (isset($_POST['ajouterFichier'])) {
    if (isset($_FILES['fichier'])) {
        ajouterFichier($dossier, $_FILES['fichier']);
    }
}

if (isset($_POST['supprimerFichier'])) {
    if (isset($_POST['fichier'])) {
        $fichier = $_POST['fichier'];
        supprimerFichier($dossier, $fichier);
    }
}
function uploadFile($file) {
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($file['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Vérifie si le fichier est une image réelle ou une fausse image
    if(isset($_POST["submit"])) {
        $check = getimagesize($file["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    // Vérifie si le fichier existe déjà
    if (file_exists($targetFile)) {
        $uploadOk = 0;
    }

    // Vérifie la taille du fichier
    if ($file["size"] > 500000) {
        $uploadOk = 0;
    }

    // Autorise certains formats de fichiers
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $uploadOk = 0;
    }

    // Vérifie si $uploadOk est à 0 à cause d'une erreur
    if ($uploadOk == 0) {
        return false;
    } else {
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return true;
        } else {
            return false;
        }
    }
}



?>
