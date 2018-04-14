<?php
require_once 'views/page_top.php';
echo "<script> window.onload = function() {
     openCode(event, 'cssid');
 }; </script>";

//Initial
$comment = null;

//Si form est soumis
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];
}


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
    <script>
        function openCode(evt, codeName) {
            let i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(codeName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
<?php require_once 'views/page_bottom.php';