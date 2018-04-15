<?php
require_once 'views/page_top.php';
require_once 'db/data.php';

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
            <input type="submit" class="buttonexec" value="Tester">
            <a href="" class="buttonexec"><img src="images/like.png" alt=""></a>
            <button type="button" class="buttonexec" name="preview-form-submit" id="preview-form-submit">
                Copier
            </button>
        </div>
    </form>
</main>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
<?php require_once 'views/page_bottom.php';