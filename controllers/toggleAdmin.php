<?php
require '../kernel/session_check.php';
//print_r($_GET);
//die();
$id = isset($_GET['id']) ? $_GET['id'] : null;
$is_admin = isset($_GET['admin']) ? $_GET['admin'] : false;
if (empty($id)) {
    header('Location: ../index.php');
    exit();
}

// Se connecter à la DB
require '../kernel/db_connect.php';
// Récupérer le Model User pour mettre à jour le user dans la table > is_admin = 1
require '../models/user.php';
// Rajoute le nom du user au message d'ajout et suppression de l'admin
$user = findOneUserBy('id',$id);
setAdmin($id,$is_admin);
// Stocker un message de confirmation dans la session
session_start();
if($is_admin) {
    $_SESSION['messages'] = ["Le user ".$user[0]['login']." est admin"];
    $_SESSION['color'] = 'success';
}else {
    $_SESSION['messages'] = ["Le user ".$user[0]['login']." n'est plus admin"];
    $_SESSION['color'] = 'primary';
}
header('Location: ../backend/gestion.php');
// Redirection vers la page gestion.php avec affichage du message