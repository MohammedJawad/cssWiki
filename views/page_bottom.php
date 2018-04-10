<?php
/**
 * Created by PhpStorm.
 * User: bleyvamo
 * Date: 05/04/2018
 * Time: 10:10 PM
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>cssWiki</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href="style/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

</head>
<body>
<header>
    <img src="images/csswiki_logo2.png" href="index.php" alt="company.logo" id="logo">
    <nav id="main-menu">
        <ul>

            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
            <li><a href="contact.php">Contactez-Nous</a></li>
            <li><a class="fas fa-heart"></a></li>
        </ul>

    </nav>
</header>
<main>


    <div id="example1">

        <figure>
            <img src="images/bird.png" alt="Bird Example CSS"  id="bird">
            <figcaption>Example 1 - A view of the pulpit rock in Norway.</figcaption>
            <span><a class="fas fa-heart"></a></span>
        </figure>






    </div>
</main>
<footer>
    <div id="divfoot1">
        <div id="divfootin1">
            <h3>Abonnement au service de courriels</h3>
            <p>Ajouter votre nom à notre list d'envoi pour<br>savoir ce qui ce passe à cssWiki</p>
            <form action="">
                <input type="email" id="email"  placeholder="Courriel">
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div id="divfootin2">
            <nav>
                <ul>
                    <li><a href="">A PROPO DE NOUS</a></li>
                    <li><a href="">PRESÉNTATION</a></li>
                    <li><a href="">PLAN DU SITE</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <li><a href="contact.php">CONTACTEZ-NOUS</a></li>
                    <li><a href="tel:15148422426">+1 514 842 2426</a></li>
                    <li><a href="">PLAN DU SITE</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="divfoot2">
        <p><small>Copyright 2018 cssWiki</small></p>
        <nav>
            <ul>
                <li><a href="https://www.instagram.com"><img src="images/instagram_logo.png"</a></li>
                <li><a href="https://twitter.com"><img src="images/twitter_logo.png"</a></li>
                <li><a href="https://www.facebook.com/"><img src="images/facebook_logo.png" alt=""></a></li>
            </ul>
        </nav>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/go-to-the-top.png" alt="back to top button"></button>
</footer>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>
