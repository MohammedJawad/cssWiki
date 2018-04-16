<?php
require_once 'views/page_top.php';

define ('ATTR_SELECTED',    'selected="selected"');

define('F_NOM', 'F_NOM');
define('F_COURRIEL', 'F_COURRIEL');
define('F_CATEGORIE', 'F_CATEGORIE');
define('F_MESSAGE', 'F_MESSAGE');

//const de validation
define('VK_IS_VALID', 'VK_IS_VALID');
define('VK_VALUE', 'VK_VALUE');
define('VK_MSG', 'VK_MSG');

// le message
$msg = "Votre code à bien été envoyé! Nous vous enverrons nos nouvelles le plus tôt possible.";





$vld = array(
    F_NOM => array(
        VK_IS_VALID => false,
        VK_VALUE => null,
        VK_MSG => 'Votre nom doit contenir au moins 2 caractères.',
    ),
    F_COURRIEL => array(
        VK_IS_VALID => false,
        VK_VALUE => null,
        VK_MSG => 'Votre courriel n\'est pas valide.',
    ),
    F_CATEGORIE => array(
        VK_IS_VALID => false,
        VK_VALUE => null,
        VK_MSG => 'Sélectionnez une catégorie.',
    ),
    F_MESSAGE => array(
        VK_IS_VALID => false,
        VK_VALUE => null,
        VK_MSG => 'Votre message doit contenir au moins 30 caractères.',
    ),
);

$en_reception = ('POST' === $_SERVER['REQUEST_METHOD']);

if($en_reception){
    //Validation nom
    $vld[F_NOM][VK_VALUE] = filter_input(INPUT_POST, F_NOM, FILTER_SANITIZE_STRING);
    $vld[F_NOM][VK_IS_VALID] = strlen($vld[F_NOM][VK_VALUE]) >= 2;

    //validaion courriel
    $vld[F_COURRIEL][VK_VALUE] = filter_input(INPUT_POST, F_COURRIEL, FILTER_VALIDATE_EMAIL);
    $vld[F_COURRIEL][VK_IS_VALID] = $vld[F_COURRIEL][VK_VALUE];

    //validation catégorie
    $vld[F_CATEGORIE][VK_VALUE] = $_POST[F_CATEGORIE];
    $vld[F_CATEGORIE][VK_IS_VALID] = !filter_input(INPUT_POST, F_CATEGORIE, FILTER_VALIDATE_FLOAT);

    //validation textarea
    $vld[F_MESSAGE][VK_VALUE] = filter_input(INPUT_POST, F_MESSAGE, FILTER_SANITIZE_STRING);
    $vld[F_MESSAGE][VK_IS_VALID] = strlen($vld[F_MESSAGE][VK_VALUE]) >= 30;

}

/*if($vld[F_NOM][VK_IS_VALID] && $vld[F_COURRIEL][VK_IS_VALID] && $vld[F_CATEGORIE][VK_IS_VALID] && $vld[F_MESSAGE][VK_IS_VALID]){
    // envoyer email
    mail($vld[F_COURRIEL][VK_VALUE],"My subject",$msg);
}*/

?>


    <main>
        <h1 class="animTitle">Contactez-nous!</h1>
        <form id="formContact" method="post">
            <fieldset>
                <div>
                    <label class="<?= ($en_reception && ! $vld[F_NOM][VK_IS_VALID]) ? 'invalide' : '' ?>" for="nom">Nom</label>
                    <input type="text" name="<?= F_NOM ?>" id="nom" placeholder="Ex: Bob" value="<?= ($en_reception) ? $vld[F_NOM][VK_VALUE] : '' ?>">
                    <?php
                    if ($en_reception && !$vld[F_NOM][VK_IS_VALID]) {
                        echo '<span id="errmsg">', $vld[F_NOM][VK_MSG], '</span>';
                    }?>
                </div>

                <div>
                    <label class="<?= ($en_reception && ! $vld[F_COURRIEL][VK_IS_VALID]) ? 'invalide' : '' ?>" for="courriel">Courriel</label>
                    <input type="email" name="<?= F_COURRIEL ?>" id="courriel" placeholder="exemple@exemple.com" value="<?= ($en_reception) ? $vld[F_COURRIEL][VK_VALUE] : '' ?>">
                    <?php
                    if ($en_reception && !$vld[F_COURRIEL][VK_IS_VALID]) {
                        echo '<span id="errmsg">', $vld[F_COURRIEL][VK_MSG], '</span>';
                    }?>
                </div>

                <div>
                    <label class="<?= ($en_reception && ! $vld[F_CATEGORIE][VK_IS_VALID]) ? 'invalide' : '' ?>" for="selectCategorie">Catégorie</label>
                    <select id="selectCategorie" name="<?= F_CATEGORIE ?>">
                        <option value="-1" <?= array_key_exists(F_CATEGORIE, $_POST) && $_POST[F_CATEGORIE] === "-1" ? ATTR_SELECTED : '' ?>>Choisissez...</option>

                        <option value="bouton" <?= array_key_exists(F_CATEGORIE, $_POST) && $_POST[F_CATEGORIE] === "bouton" ? ATTR_SELECTED : '' ?>>Bouton</option>
                        <option value="animation" <?= array_key_exists(F_CATEGORIE, $_POST) && $_POST[F_CATEGORIE] === "animation" ? ATTR_SELECTED : '' ?>>Animation</option>
                        <option value="transition" <?= array_key_exists(F_CATEGORIE, $_POST) && $_POST[F_CATEGORIE] === "transition" ? ATTR_SELECTED : '' ?>>Transition</option>
                    </select><?php
                    if ($en_reception && !$vld[F_CATEGORIE][VK_IS_VALID]) {
                        echo '<span id="errmsg">', $vld[F_CATEGORIE][VK_MSG], '</span>';
                    }?>
                </div>

                <div>
                    <label class="<?= ($en_reception && ! $vld[F_MESSAGE][VK_IS_VALID]) ? 'invalide' : '' ?>" for="codeTexte">HTML/CSS</label>
                    <textarea name="<?= F_MESSAGE ?>" id="codeTexte" placeholder="Insérer votre code ici"><?= ($en_reception) ? $vld[F_MESSAGE][VK_VALUE] : '' ?></textarea>
                    <?php
                    if ($en_reception && !$vld[F_MESSAGE][VK_IS_VALID]) {
                        echo '<span id="errmsg">', $vld[F_MESSAGE][VK_MSG], '</span>';
                    }?>
                </div>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>
    </main>

<?php require_once 'views/page_bottom.php';
