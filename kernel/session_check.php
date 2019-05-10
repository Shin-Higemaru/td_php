<?php
// Récupérer la session.
session_start();
// Vérifier la preuve d'identification et d'autorisation.
if(isset($_SESSION['is_admin']) == false) {
    $_SESSION['messages'] = ['Accès interdit'];
    header('Location: ../backend/index.php');
    exit();
}
// Redirection vers page login si pas autorisé.