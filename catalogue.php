<?php
require_once 'views/page_top.php';
require_once 'db/data.php';

?>
    <main class="onglet">
        <h2>Catalogue</h2>
        <form method="get">

        <?php foreach ($category as $id => $item) { ?>
            <input id='tab<?= $id ?>' type="radio" name="tabs" value="<?= $id ?>" <?php if($id == "1") echo "checked"; ?> />
            <label for='tab<?= $id ?>'><?= $item[NAME_CATEGORY] ?></label>
        <?php } ?>


<!--           -->

   <!--    <input id="tab1" type="radio" name="tabs" checked value="1">
        <label for="tab1"><?/*= $category[1][NAME_CATEGORY] */?></label>

        <input id="tab2" type="radio" name="tabs" value="2">
        <label for="tab2"><?/*= $category[2][NAME_CATEGORY] */?></label>

        <input id="tab3" type="radio" name="tabs" value="3">
        <label for="tab3"><?/*= $category[3][NAME_CATEGORY] */?></label>
-->

    <section id="content1" class="row">
            <?php foreach ($subcategory as $id => $item) {
                if($item[NAME_CATEGORY] == "1"){ ?>
                <div class="col-4">
                    <div class="wrapper2" id="divcat">
                    <?= $item[CODE] ?>
                    </div>
                    <div id="labtitlescat">
                        <h3><?= $item[NAME_SUBCATEGORY]?></h3>
                        <a href=""><img src="images/like.png" alt=""></a>
                        <h4><?= $item[AUTHOR] ?></h4>
                    </div>
                </div>
            <?php }} ?>
        </section>
        <section id="content2" class="row">
            <?php foreach ($subcategory as $id => $item) {
                if($item[NAME_CATEGORY] == "2"){ ?>
            <div class="col-4">
                <div class="wrapper2" id="divcat">
                            <?= $item[CODE] ?>
                </div>
                <div id="labtitlescat">
                    <h3><?= $item[NAME_SUBCATEGORY]?></h3>
                    <a href=""><img src="images/like.png" alt=""></a>
                    <h4><?= $item[AUTHOR] ?></h4>
                </div>
            </div>
                <?php }} ?>
        </section>

        <section id="content3" class="row">
            <?php foreach ($subcategory as $id => $item) {
                if($item[NAME_CATEGORY] == "3"){ ?>
                    <div class="col-4">
                        <div class="wrapper2" id="divcat">
                            <?= $item[CODE] ?>
                        </div>
                        <div id="labtitlescat">
                            <h3><?= $item[NAME_SUBCATEGORY]?></h3>
                            <a href=""><img src="images/like.png" alt=""></a>
                            <h4><?= $item[AUTHOR] ?></h4>
                        </div>
                    </div>
                <?php }} ?>
        </section>
        </form>
    </main>
<?php require_once 'views/page_bottom.php';