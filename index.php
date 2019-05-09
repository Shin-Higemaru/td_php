<?php
require 'kernel/functions.php';
// Récupération / démarrage session
session_start();
var_dump($_SESSION);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Top navbar example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/navbar-top.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Haut navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Désactivé</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
        </form>
    </div>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-8 offset-2">

                    <?= getFlash() ?>
                <h1>Inscription</h1>
                <form action="controllers/register.php" method="POST">
                <div class="form-group">
                    <label for="login">Votre login :</label>
                    <input type="text" class="form-control" name="login" id="login">
                </div>
                <div class="form-group">
                    <label for="email">Votre email :</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Votre mot de passe :</label>
                    <input type="text" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="nom">Votre nom :</label>
                    <input type="text" class="form-control" name="nom" id="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Votre prénom :</label>
                    <input type="text" class="form-control" name="prenom" id="prenom">
                </div>
                <input type="submit" class="btn btn-primary" value="s'inscrire">
                </form>
            </div>
        </div>

    </div>
</main>
<script src="js/jquery-3.3.1.slim.min.js"></script>
</script><script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
