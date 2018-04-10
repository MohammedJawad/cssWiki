<?php
require_once 'views/page_top.php';
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

        <main>
            <div id="wrapper">
                <div id="banner">
                    <img src="images/banner.png" alt="banner" id="bannercss">
                </div>
                <h1>Check out our pens</h1>
                <div id="example1">
                    <figure>
                    <img src="images/bird.png" alt="Bird Example CSS"  id="bird">
                    <figcaption>Example 1 - A view of the pulpit rock in Norway.</figcaption>
                    <span>Blanca Leyva</span>
                </figure>
                </div>



        </main>
        <footer>
           <?php require_once 'views/page_bottom.php'; ?>
        </footer>
    </body>
</html>