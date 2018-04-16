<?php
?>

<footer>
    <div id="divfoot1">
        <div id="divfootin1">
            <h3>Abonnement au service de courriels</h3>
            <p id="footer-text">Ajouter votre nom à notre list d'envoi pour<br>savoir ce qui ce passe à cssWiki</p>
            <form method="post">
                <input type="email" id="email"  placeholder="Courriel">
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div id="divfootin2">
            <nav>
                <ul itemscope itemtype="http://schema.org/Organization">
                    <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span>ADRESSE</span>
                        <span itemprop="streetAddress">255 boul. Crémazie Est, bureau 100</span>
                        <span itemprop="postalCode">H2M 1M2</span>

                    </li>
                    <li><span itemprop="telephone">514-842-2426</span></li>
                    <li><span itemprop="email">info@isi-mtl.com</span></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="divfoot2">
        <small>Copyright 2018 cssWiki</small>
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