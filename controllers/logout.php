<?php
// Récupérer session
session_start();
// Destruction session
session_destroy();
// Redirection vers page login
header('Location: ../backend/index.php');
exit();