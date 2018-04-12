<?php
require_once 'views/page_top.php';


define('F_NOM', 'F_NOM');
define('F_COURRIEL', 'F_COURRIEL');
define('F_CATEGORIE', 'F_CATEGORIE');
define('F_MESSAGE', 'F_MESSAGE');

//const de validation
define('VK_IS_VALID', 'VK_IS_VALID');
define('VK_VALUE', 'VK_VALUE');
define('VK_MSG', 'VK_MSG');


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

$en_reception = array_key_exists(F_NOM, $_POST) && array_key_exists(F_COURRIEL, $_POST) && array_key_exists(F_CATEGORIE, $_POST) && array_key_exists(F_MESSAGE, $_POST);

if($en_reception){
    //Validation nom
    $vld[F_NOM][VK_VALUE] = filter_input(INPUT_POST, F_NOM, FILTER_SANITIZE_STRING);
    $vld[F_NOM][VK_IS_VALID] = strlen($vld[F_NOM][VK_VALUE]) >= 2;

    //validaion courriel
    $vld[F_COURRIEL][VK_VALUE] = filter_input(INPUT_POST, F_COURRIEL, FILTER_VALIDATE_EMAIL);
    $vld[F_COURRIEL][VK_IS_VALID] = $vld[F_COURRIEL][VK_VALUE];

    //validation catégorie
    $vld[F_CATEGORIE][VK_VALUE] = $_POST[F_CATEGORIE];
    $vld[F_CATEGORIE][VK_IS_VALID] = $_POST[F_CATEGORIE] !== '-1';

    //validation textarea
    $vld[F_MESSAGE][VK_VALUE] = filter_input(INPUT_POST, F_MESSAGE, FILTER_SANITIZE_STRING);
    $vld[F_MESSAGE][VK_IS_VALID] = strlen($vld[F_MESSAGE][VK_VALUE]) >= 30;

}
var_dump($_POST);



?>


    <main>
        <form id="formContact" method="post">
            <fieldset>
                <div>
                    <label class="<?= ($en_reception && ! $vld[F_NOM][VK_IS_VALID]) ? 'invalide' : '' ?>" for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Ex: Bob">
                </div>

                <div>
                    <label class="<?= ($en_reception && ! $vld[F_COURRIEL][VK_IS_VALID]) ? 'invalide' : '' ?>" for="courriel">Courriel</label>
                    <input type="email" name="courriel" id="courriel" placeholder="exemple@exemple.com">
                </div>

                <div>
                    <label class="<?= ($en_reception && ! $vld[F_CATEGORIE][VK_IS_VALID]) ? 'invalide' : '' ?>" for="selectCategorie">Catégorie</label>
                    <select id="selectCategorie">
                        <option value="-1">Choisissez...</option>
                        <option value="bouton">Bouton</option>
                        <option value="animation">Animation</option>
                        <option value="transition">Transition</option>
                    </select>
                </div>

                <div>
                    <label class="<?= ($en_reception && ! $vld[F_MESSAGE][VK_IS_VALID]) ? 'invalide' : '' ?>" for="codeTexte">CSS</label>
                    <textarea id="codeTexte" placeholder="Insérer votre code ici"></textarea>
                </div>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>
    </main>

<?php require_once 'views/page_bottom.php';
