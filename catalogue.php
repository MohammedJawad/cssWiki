<?php
require_once 'views/page_top.php';
?>
    <main>
        <h1>Catalogue</h1>
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">Boutons</label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2">Animations</label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3">Transitions</label>

        <section id="content1">
            <a href="executer.php">
                <div id="divcat"></div>
            </a>
            <div id="labtitlescat">
                <h3>Boutons 1</h3>
                <a href=""><img src="images/like.png" alt=""></a>
                <h4>Autor</h4>
            </div>

        </section>
        <section id="content2">
            <a href="executer.php">
                <div id="divcat"></div>
            </a>
            <div id="labtitlescat">
                <h3>Animation 1</h3>
                <a href=""><img src="images/like.png" alt=""></a>
                <h4>Autor</h4>
            </div>
        </section>
        <section id="content3">
            <a href="executer.php">
                <div id="divcat"></div>
            </a>
            <div id="labtitlescat">
                <h3>Transitions 1</h3>
                <a href=""><img src="images/like.png" alt=""></a>
                <h4>Autor</h4>
            </div>
        </section>
    </main>
<?php require_once 'views/page_bottom.php';