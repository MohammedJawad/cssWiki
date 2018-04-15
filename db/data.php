<?php
define('NAME_CATEGORY','Categorie');

define('IMAGE', 'image');
define('ALT', 'alt');
define('NAME_SUBCATEGORY','Nom');
define('AUTHOR','Auteur: ');
define('CODE','Code html');
define('OP_NAME', 'op');
define('OP_AJOUT', 'add');
define('NB_WISH', 'Total');
define('IDPROD', 'Produit');
define ('SESS_FAVORITE', 'SESS_FAVORITE');



$category = array(
    '1' => array(
        NAME_CATEGORY => "Boutons",
    ),

    '2' => array(
        NAME_CATEGORY => "Animations",
    ),

    '3' => array(
        NAME_CATEGORY => "Transitions",
    ),
);

$subcategory = array(
    '11' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 1",
        AUTHOR => 'Auteur a',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
</style>
</head>
<body>

<h2>Colored Button Borders</h2>
<p>Use the border property to add a border to the button:</p>

<button class=\"button button1\">Green</button>
<button class=\"button button2\">Blue</button>
<button class=\"button button3\">Red</button>
<button class=\"button button4\">Gray</button>
<button class=\"button button5\">Black</button>

</body>
</html>",
    ),

    '12' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 2",
        AUTHOR => 'Auteur b',
        CODE => "<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
<body>

<div class=\"w3-container\">
<h2>Button Bars</h2>
<p>Buttons can be grouped together without a space between them by using <strong>w3-bar-item</strong> class:</p>
<div class=\"w3-bar\">
  <button class=\"w3-bar-item w3-button w3-black\">Button</button>
  <button class=\"w3-bar-item w3-button w3-teal\">Button</button>
  <button class=\"w3-bar-item w3-button w3-red\">Button</button>
</div>

</div>
</body>
</html>",
    ),

    '13' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 3",
        AUTHOR => 'Auteur c',
        CODE => "",
    ),

    '14' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 4",
        AUTHOR => 'Auteur d',
        CODE => "",
    ),

    '15' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 5",
        AUTHOR => 'Auteur e',
        CODE => "",
        ),

    '16' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 6",
        AUTHOR => 'Auteur f',
        CODE => "",
    ),

    '17' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 7",
        AUTHOR => 'Auteur g',
        CODE=> "",
    ),

    '18' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 8",
        AUTHOR => 'Auteur h',
        CODE => "",
    ),
    '19' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 9",
        AUTHOR => 'Auteur i',
        CODE => "",
    ),

    '21' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 1",
        AUTHOR => 'Auteur aa',
        CODE => "<div id=\"Circle\">
    <div id=\"cont\">
        <div class=\"top\">
            <div class=\"dome\"></div>
            <div class=\"fan\">
                <div class=\"fan_blade1\"></div>
                <div class=\"fan_blade2\"></div>
                <div class=\"fan_blade3\"></div>
                <div class=\"fan_blade4\"></div>
            </div>
            <div class=\"mill\"></div>
            <div class=\"sky\">
                <div class=\"tailstar\"></div>
                <div class=\"stars\"></div>
                <div class=\"moon\"></div>
            </div>
            <div class=\"floor\">
                <span class=\"tree1\"></span>
                <span class=\"tree2\"></span>
                <span class=\"tree3\"></span>
            </div>
        </div>
        <div class=\"bottom\">
            <div class=\"dome\"></div>
            <div class=\"fan\">
                <div class=\"fan_blade1\"></div>
                <div class=\"fan_blade2\"></div>
                <div class=\"fan_blade3\"></div>
                <div class=\"fan_blade4\"></div>
            </div>
            <div class=\"mill\"></div>
            <div class=\"sky\">
                <div class=\"stars\"></div>
                <div class=\"moon\"></div>
            </div>
            <div class=\"floor\">
                <span class=\"tree1\"></span>
                <span class=\"tree2\"></span>
                <span class=\"tree3\"></span>
            </div>>
        </div>
    </div>

</div>",
    ),

    '22' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 2",
        AUTHOR => 'Auteur bb',
        CODE => "",
    ),

    '23' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 3",
        AUTHOR => 'Auteur cc',
        CODE => "",
    ),

    '24' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 4",
        AUTHOR => 'Auteur dd',
        CODE => "",
    ),

    '25' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 5",
        AUTHOR => 'Auteur ee',
        CODE => "",
    ),

    '26' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 6",
        AUTHOR => 'Auteur ff',
        CODE => "",
    ),

    '27' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 7",
        AUTHOR => 'Auteur gg',
        CODE => "",
    ),

    '28' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 8",
        AUTHOR => 'Auteur hh',
        CODE => "",
    ),
    '29' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 9",
        AUTHOR => 'Auteur ii',
        CODE => "",
    ),
    '31' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 1",
        AUTHOR => 'Auteur aaa',
        CODE => "<div id=\"outerspace\">
                    <div class=\"rocket\">
                        <div><!-- rocket --></div>
                        .rocket
                    </div>#outerspace
                 </div>",
    ),

    '32' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 2",
        AUTHOR => 'Auteur bbb',
        CODE => "",
    ),

    '33' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 3",
        AUTHOR => 'Auteur ccc',
        CODE => "",
    ),

    '34' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 4",
        AUTHOR => 'Auteur ddd',
        CODE => "",
    ),

    '35' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 5",
        AUTHOR => 'Auteur eee',
        CODE => "",
    ),

    '36' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 6",
        AUTHOR => 'Auteur fff',
        CODE => "",
    ),

    '37' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 7",
        AUTHOR => 'Auteur ggg',
        CODE => "",
    ),

    '38' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 8",
        AUTHOR => 'Auteur hhh',
        CODE => "",
    ),

    '39' => array(
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 9",
        AUTHOR => 'Auteur iii',
        CODE => "",
    ),

);
