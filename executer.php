<?php
require_once 'views/page_top.php';
echo "<script> window.onload = function() {
     openCode(event, 'cssid');
 }; </script>";

?>
<main>
    <h2>Button</h2>
    <div id="totalexec">
        <div id="wrapexec">
            <div id="divexec">
                <button class="button button1">Button</button>
                <button class="button button2">Button</button>
                <button class="button button3">Button</button>
                <button class="button button5">Button</button>
            </div>
            <div id="divcodes">
                <div class="tab">
                    <button class="tablinks" onclick="openCode(event, 'cssid')">CSS</button>
                    <button class="tablinks" onclick="openCode(event, 'htmlid')">HTML</button>
                </div>
                <div id="cssid" class="tabcontent">
                    <p>Exemple code css.</p>
                </div>
                <div id="htmlid" class="tabcontent">
                    <p>Exemple code html.</p>
                </div>
            </div>
        </div>
        <div id="divbuttonexec">
            <button type="button" class="buttonexec">
                Tester
            </button>
            <a href="" class="buttonexec"><img src="images/like.png" alt=""></a>
            <button type="button" class="buttonexec">
                Copier
            </button>
        </div>
    </div>
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
<?php require_once 'views/page_bottom.php';