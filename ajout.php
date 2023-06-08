<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $username = $_POST['userid'];
    $password = $_POST['mdp'];
    $role = $_POST['role'];

    $data = file_get_contents('data/users2.json');
    $users = json_decode($data, true);

    $newUser = [
        'id' => uniqid(),
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'username' => $username,
        'password' => $password,
        'role' => $role
    ];

    $users['employes'][] = $newUser;

    $json = json_encode($users);
    file_put_contents('data/users2.json', $json);

    // Rediriger vers la page principale ou une autre page de votre choix
    header('Location: gestionutilisateur.php');
    exit();
}
?>
