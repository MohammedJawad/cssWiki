<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Contactez-nous</title>
    <link href="style/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <header>
        <h1></h1>
    </header>

    <main>
        <form id="formContact" method="post">
            <fieldset>
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Ex: Bob">
                </div>

                <div>
                    <label for="courriel">Courriel</label>
                    <input type="email" name="courriel" id="courriel" placeholder="exemple@exemple.com">
                </div>

                <div>
                    <label for="selectCategorie">Catégorie</label>
                    <select id="selectCategorie">
                        <option value="-1">Choisissez...</option>
                        <option value="bouton">Bouton</option>
                        <option value="animation">Animation</option>
                        <option value="transition">Transition</option>
                    </select>
                </div>

                <div>
                    <label for="codeTexte">CSS</label>
                    <textarea id="codeTexte" placeholder="Insérer votre code ici"></textarea>
                </div>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>
    </main>

    <footer>
    </footer>
</div>
</body>
</html>