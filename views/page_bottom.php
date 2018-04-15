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
                <li><a href="https://www.instagram.com"><img src="images/instagram_logo.png" id="ig"></a></li>
                <li><a href="https://twitter.com"><img src="images/twitter_logo.png" id="twitter"></a></li>
                <li><a href="https://www.facebook.com/"><img src="images/facebook_logo.png" alt="fb" id="fb"></a></li>
            </ul>
        </nav>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/go-to-the-top.png" alt="back to top button" id="top"></button>
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