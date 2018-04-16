<?php
?>

<footer>
    <div id="divfoot1">
        <div id="divfootin1">
            <h3>Abonnement au service de courriels</h3>
            <p id="footer-text">Ajouter votre nom à notre list d'envoi pour<br>savoir ce qui ce passe à cssWiki</p>
            <form action="">
                <input type="email" id="email"  placeholder="Courriel">
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div id="divfootin2">
            <nav>
                <ul>
                    <li><a href="">A PROPOS DE NOUS</a></li>
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
                <li><a href="https://www.instagram.com"><img src="images/instagram_logo.png" id="ig"></a></li>
                <li><a href="https://twitter.com"><img src="images/twitter_logo.png" id="twitter"></a></li>
                <li><a href="https://www.facebook.com/"><img src="images/facebook_logo.png" alt="fb" id="fb"></a></li>
            </ul>
        </nav>
    </div>

</footer>
<script>
    const menu = document.getElementById('menu');
    const toggle = document.getElementById('menu-toggle');

    toggle.addEventListener('click', event => {
        menu.classList.toggle('is-hidden');
    });
</script>

</body>
</html>