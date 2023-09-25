<?php 
    include('../config/constants.php');
    include('login-check.php');
?>

<html>
    <head>
        <title>Espace de gestion des commandes </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <!Section Menu >
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Administration du site</a></li>
                    <li><a href="manage-categories.php">Catégories de plats</a></li>
                    <li><a href="manage-alacarte.php">A la carte</a></li>
                    <li><a href="manage-order.php">Gestion des commandes</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
        <!Fin Section Menu >