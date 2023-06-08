<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    var_dump($id);

    $data = file_get_contents('data/users2.json');
    $users = json_decode($data, true);

    foreach ($users['employes'] as $key => $user) {
        if ($user['id'] == $id) {
            unset($users['employes'][$key]);
            break;
        }
    }

    $json = json_encode($users);
    file_put_contents('data/users2.json', $json);

    // Rediriger vers la page principale ou une autre page de votre choix
    header('Location: gestionutilisateur.php');
    exit();
}
?>
