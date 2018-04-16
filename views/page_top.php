<?php
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>cssWiki</title>
        <link rel="stylesheet" type="text/css" href="plugin/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <link href="style/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="plugin/codemirror/lib/codemirror.css">
        <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <script src="jquery/jquery-hamburger.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div>
            <img src="images/csswiki_logo2.png" href="index.php" alt="company.logo" id="logo">
            <nav class="main-menu is-hidden" id="menu">
                <a href="#" id="menu-icon"></a>
                <ul class="row nomenu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="catalogue.php">Catalogue</a></li>
                    <li><a href="contact.php">Contactez-Nous</a></li>
                </ul>
            </nav>
            <a href="favoris.php"><span class="fas fa-heart"></span></a></div>
        </header>
        <div id="topmobile">
            <div class="mobile-nav">
                <!-- menu MOBILE -->
                <div class="menu-btn" id="menu-hamburger">
                    <button id="menu-toggle">☰</button>
                </div>
            </div>
            <img src="images/csswiki_logo2.png" href="index.php" alt="company.logo" id="logo">
            <a href="favoris.php"><span class="fas fa-heart"></span></a>
        </div>
