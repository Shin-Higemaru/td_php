<?php
// 1- Connexion à la DB
require '../kernel/db_connect.php';
// 2- Récupérer les données du form
require '../kernel/functions.php';
require '../models/user.php';
$fields_required = ['login','password'];
$datas_form = extractDatasForm($_POST,$fields_required);
$messages= [];
// 3- Vérifier que tous les champs sont remplis
if(in_array(null,$datas_form)) {
    $messages[] = "Tous les champs sont obligatoires.";
}
// 4- Lancer une requête SQL pour récupérer le user avec le login saisi
$user = findOneUserBy('login',$datas_form['login']);
if (count($user) != 1) {
    $messages[] = "Impossible de vous identifier !";
}

// 5- Comparer le mot de passe stocké dans la db au mot de passe saisi par le user
else if (password_verify($datas_form['password'],$user[0]['password'])) {
//    var_dump($user);
//    die();
    // 6- Si comparaison OK > is-admin ==1 ??
    if($user[0]['is_admin'] == false) {
        $messages[] = "Vous n'avez pas acces !";
    }else {
        // 7- Si user est admin > démarrage session, stockage dans la session d'une preuve d'identification
        session_start();
        $_SESSION["is_admin"] = true;
        // 8- Redirection de user vers la page gestion.php (page à créer)
        header('Location: ../backend/gestion.php');
        exit();
    }
}
else {
    $messages[] = "Mauvais mot de passe.";
}

// Gestion des erreurs avec la variable $_SESSION['message']
// On cumule les messages d'erreur et on redirige le user sur le form de login avec affichage de toutes ses erreurs.
session_start();
$_SESSION['messages'] = $messages;
header('Location: ../backend/index.php');