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

//Initial
$comment = !empty($_GET) ? $subcategory[$_GET['Produit']][CODE] : '';


//Si form est soumis
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];
}

//var_dump($_GET['Produit']);
//var_dump($subcategory[$_GET['Produit']][CODE]);


?>
<main>
    <h2>Button</h2>
    <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div id="wrapexec">
            <div id="preview-comment"><?php echo $comment; ?></div>
            <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment"><?php echo $comment; ?></textarea>
        </div>
        <div id="divbuttonexec">
            <input type="submit" class="buttonexec" value="Tester" name="preview-form-submit" id="preview-form-submit">
            <a href="" class="buttonexec"><img src="images/like.png" alt=""></a>
            <button type="button" class="buttonexec" onclick="pressePapier()">
                Copier
            </button>
        </div>
    </form>
</main>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
<?php require_once 'views/page_bottom.php';