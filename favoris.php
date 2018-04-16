<?php
require_once 'views/page_top.php';
require_once 'db/data.php';


if (PHP_SESSION_NONE  === session_status()) {
    session_start();
}
if ( ! array_key_exists(SESS_FAVORITE, $_SESSION)) {
    $_SESSION[SESS_FAVORITE] = array();
}

$wl =& $_SESSION[SESS_FAVORITE];

if (array_key_exists(OP_NAME, $_GET)) {
    if ($_GET[OP_NAME] === OP_AJOUT) {

        $validate = 0;

        foreach ($_SESSION[SESS_FAVORITE] as $idwl => $itemwl) {
            if($_GET[IDPROD] == $itemwl){
                $validate = 1;
                unset($wl[$idwl]);
            }
        }

        if($validate == 0){
            $wl[] = $_GET[IDPROD];
        }
    }
}

if ( ! array_key_exists(NB_WISH, $_SESSION)) {
    $_SESSION[NB_WISH] = 0;
    if ( ! array_key_exists(IDPROD, $_SESSION)) {
        $_SESSION[IDPROD] = 0;
    }
}

if ( (array_key_exists(OP_NAME, $_GET)) && ($_GET[OP_NAME] === OP_AJOUT) ) {
    $_SESSION[NB_WISH]++;
    $_SESSION[IDPROD] = $_GET[IDPROD];
}


?>

    <main class="onglet">
        <h1 class="animTitle">Vos favoris</h1>
        <form method="get">

             <?php foreach ($category as $id => $item) { ?>
                <input id='tab<?= $id ?>' type="radio" name="tabs" value="<?= $id ?>" <?php if($id == "1") echo "checked"; ?> />
                <label for='tab<?= $id ?>'><?= $item[NAME_CATEGORY] ?></label>
            <?php } ?>

            <section id="content1" class="row">
                <?php foreach ($_SESSION[SESS_FAVORITE] as $idfav => $itemfav) { ?>

                <?php foreach ($subcategory as $id => $item) {
                    if($item[NAME_CATEGORY] == "1" && $id == $itemfav){ ?>
                        <div class="col-4">
                            <div class="wrapper2" id="divcat">
                                <img src="images/<?= $item[IMAGE] ?>" alt="<?= $item[ALT] ?>">
                            </div>
                            <div id="labtitlescat">
                                <a href="executer.php<?= '?', IDPROD, '=', $id ?>" id="img<?= $id ?>"><?= $item[NAME_SUBCATEGORY]?></a>

                                <!-- A RETESTER! -->

                                <a href="<?= $_SERVER['PHP_SELF'], '?',  OP_NAME , '=' , OP_AJOUT, '&' , IDPROD, '=', $id ?>" id="img<?= $id ?>">

                                    <?php if ($_SESSION[NB_WISH] == 0){ ?>
                                        <img src="images/likevide.png" alt="" id="imglike<?= $id ?>">
                                    <?php } else {
                                        $img = 0;
                                        foreach ($_SESSION[SESS_FAVORITE] as $idfav => $itemfav) {
                                            if($id == $itemfav) { $img = 1; $item[$id][EST_FAVORIS] = true; ?>
                                                <img src="images/bouton_fermer.png" alt="bouton fermer" id="imglike<?= $id ?>">
                                            <?php }}
                                        if($img == 0){ $item[$id][EST_FAVORIS] = false; ?>
                                            <img src="images/bouton_fermer.png" alt="bouton fermer" id="imglike<?= $id ?>">
                                        <?php  }}
                                    ?>
                                </a>

                                <h4><?= $item[AUTHOR] ?></h4>
                            </div>
                        </div>
                    <?php }}} ?>
            </section>
            <section id="content2" class="row">
                <?php foreach ($_SESSION[SESS_FAVORITE] as $idfav => $itemfav) { ?>

                    <?php foreach ($subcategory as $id => $item) {
                        if($item[NAME_CATEGORY] == "2" && $id == $itemfav){ ?>
                            <div class="col-4">
                                <div class="wrapper2" id="divcat">
                                    <img src="images/<?= $item[IMAGE] ?>" alt="<?= $item[ALT] ?>">
                                </div>
                                <div id="labtitlescat">
                                    <a href="executer.php<?= '?', IDPROD, '=', $id ?>" id="img<?= $id ?>"><?= $item[NAME_SUBCATEGORY]?></a>

                                    <!-- A RETESTER! -->

                                    <a href="<?= $_SERVER['PHP_SELF'], '?',  OP_NAME , '=' , OP_AJOUT, '&' , IDPROD, '=', $id ?>" id="img<?= $id ?>">

                                        <?php if ($_SESSION[NB_WISH] == 0){ ?>
                                            <img src="images/likevide.png" alt="" id="imglike<?= $id ?>">
                                        <?php } else {
                                            $img = 0;
                                            foreach ($_SESSION[SESS_FAVORITE] as $idfav => $itemfav) {
                                                if($id == $itemfav) { $img = 1; $item[$id][EST_FAVORIS] = true; ?>
                                                    <img src="images/bouton_fermer.png" alt="bouton fermer" id="imglike<?= $id ?>">
                                                <?php }}
                                            if($img == 0){ $item[$id][EST_FAVORIS] = false; ?>
                                                <img src="images/bouton_fermer.png" alt="bouton fermer" id="imglike<?= $id ?>">
                                            <?php  }}
                                        ?>
                                    </a>

                                    <h4><?= $item[AUTHOR] ?></h4>
                                </div>
                            </div>
                        <?php }}} ?>
            </section>

            <section id="content3" class="row">
                <?php foreach ($_SESSION[SESS_FAVORITE] as $idfav => $itemfav) { ?>

                    <?php foreach ($subcategory as $id => $item) {
                        if($item[NAME_CATEGORY] == "3" && $id == $itemfav){ ?>
                            <div class="col-4">
                                <div class="wrapper2" id="divcat">
                                    <img src="images/<?= $item[IMAGE] ?>" alt="<?= $item[ALT] ?>">
                                </div>
                                <div id="labtitlescat">
                                    <a href="executer.php<?= '?', IDPROD, '=', $id ?>" id="img<?= $id ?>"><?= $item[NAME_SUBCATEGORY]?></a>

                                    <!-- A RETESTER! -->

                                    <a href="<?= $_SERVER['PHP_SELF'], '?',  OP_NAME , '=' , OP_AJOUT, '&' , IDPROD, '=', $id ?>" id="img<?= $id ?>">

                                        <?php if ($_SESSION[NB_WISH] == 0){ ?>
                                            <img src="images/likevide.png" alt="" id="imglike<?= $id ?>">
                                        <?php } else {
                                            $img = 0;
                                            foreach ($_SESSION[SESS_FAVORITE] as $idfav => $itemfav) {
                                                if($id == $itemfav) { $img = 1; $item[$id][EST_FAVORIS] = true; ?>
                                                    <img src="images/bouton_fermer.png" alt="bouton fermer" id="imglike<?= $id ?>">
                                                <?php }}
                                            if($img == 0){ $item[$id][EST_FAVORIS] = false; ?>
                                                <img src="images/bouton_fermer.png" alt="bouton fermer" id="imglike<?= $id ?>">
                                            <?php  }}
                                        ?>
                                    </a>

                                    <h4><?= $item[AUTHOR] ?></h4>
                                </div>
                            </div>
                        <?php }}} ?>
            </section>
        </form>
    </main>

<?php require_once 'views/page_bottom.php';