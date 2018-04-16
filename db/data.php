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
define('EST_FAVORIS', 'est_favoris');



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
        EST_FAVORIS => false,
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
        EST_FAVORIS => false,
        IMAGE => "bouton2.png",
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
        EST_FAVORIS => false,
        IMAGE => "bouton3.png",
        ALT => "image bouton3",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 3",
        AUTHOR => 'Auteur c',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>

<h2>Bouton animé - \"Effet d'appui\"</h2>

<button class=\"button\">Click Me</button>

</body>
</html>
",
    ),

    '14' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton4.png",
        ALT => "image bouton4",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 4",
        AUTHOR => 'Auteur d',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
.button {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 28px;
    color: #FFFFFF;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: \"\";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
</style>
</head>
<body>

<h2>Animated Button - Ripple Effect</h2>

<button class=\"button\">Click Me</button>

</body>
</html>",
    ),

    '15' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton5.png",
        ALT => "image bouton",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Chargement animation",
        AUTHOR => 'Jeremy',
        CODE => "<!DOCTYPE html>
<html>
<head>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
.buttonload {
    background-color: #4CAF50; /* Green background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 24px; /* Some padding */
    font-size: 16px; /* Set a font-size */
}

/* Add a right margin to each icon */
.fa {
    margin-left: -12px;
    margin-right: 8px;
}
</style>
</head>
<body>

<h2>Boutons chargement</h2>

<button class=\"buttonload\">
  <i class=\"fa fa-spinner fa-spin\"></i>Loading
</button>

<button class=\"buttonload\">
  <i class=\"fa fa-circle-o-notch fa-spin\"></i>Loading
</button>

<button class=\"buttonload\">
  <i class=\"fa fa-refresh fa-spin\"></i>Loading
</button>

</body>
</html>",
        ),

    '16' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton6.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "1",
        NAME_SUBCATEGORY => "Boutons 6",
        AUTHOR => 'Auteur f',
        CODE => "<!DOCTYPE html>
<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Add icon library -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
.btn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
}
</style>
</head>
<body>

<h2>Boutons Icones</h2>
<p>Boutons icones:</p>
<button class=\"btn\"><i class=\"fa fa-home\"></i></button>
<button class=\"btn\"><i class=\"fa fa-bars\"></i></button>
<button class=\"btn\"><i class=\"fa fa-trash\"></i></button>
<button class=\"btn\"><i class=\"fa fa-close\"></i></button>
<button class=\"btn\"><i class=\"fa fa-folder\"></i></button>

<p>Boutons icones avec texte:</p>
<button class=\"btn\"><i class=\"fa fa-home\"></i> Home</button>
<button class=\"btn\"><i class=\"fa fa-bars\"></i> Menu</button>
<button class=\"btn\"><i class=\"fa fa-trash\"></i> Trash</button>
<button class=\"btn\"><i class=\"fa fa-close\"></i> Close</button>
<button class=\"btn\"><i class=\"fa fa-folder\"></i> Folder</button>

</body>
</html>",
    ),

    '21' => array(
        EST_FAVORIS => false,
        IMAGE => "animation1.png",
        ALT => "image animation1",
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
        EST_FAVORIS => false,
        IMAGE => "animation2.png",
        ALT => "image animation",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Badges animation",
        AUTHOR => 'Auteur bb',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
*, *:before, *:after {box-sizing:border-box}

html {
	margin:0 auto;
	padding:1em 2em;
	font:normal 100%/1.5 'Helvetica Neue','Segoe UI', Arial, sans-serif;
	color:#eee; 
	background:#485258;
  height:100%
	}

h1 {
	font-size:2em;
	margin-bottom:1em;
}

.menu {
	display:inline-block;
	margin:0 -.5em 1.5em;
	box-shadow:0.12em 0.12em 0 rgba(40,40,40,.2);
	list-style-type:none;
	padding:0;
	margin:0;
	font-size:1em;
	margin-bottom:1.5em;
}

.menu li {
	float:left;
	border-left:0.063em solid #a6c6cd;
	border-right:0.063em solid #6ca1ac;
}

.menu a {
	display:block;
	padding:0 1em;
	line-height:2.5em;
	position:relative;
	font-weight:bold;
	text-decoration:none;
	color:#364652;
	background-color:#86B2BB;
	text-shadow:0 0.063em 0 #a6c6cd;
}

.menu a:hover, .menu a:active, .menu a:focus {
	color:#eee;
	text-shadow:0.063em 0.063em 0 #547177;
}

.menu a[data-bubble]:after {
	content:attr(data-bubble);
	position:absolute;
   top:0;
	right:0.5em;
	height:1.5em;
	line-height:1.5em;
	padding:0 .46em;
	text-align:center;
	text-shadow:0 0.063em 0 rgba(0,0,0,.2);
	background-color:#eee;
	color:#364652;
	box-shadow:0 0.063em 0.063em rgba(0,0,0,.2);
	border-radius:4em;
	z-index:-1;
  -webkit-transform: translateZ(0);/*Prevents text flicker*/
	will-change: transform;
}

a.gold[data-bubble]:after {
	background-color:gold;
}

.menu a:hover[data-bubble]:after, .menu a:active[data-bubble]:after, .menu a:focus[data-bubble]:after {
	-webkit-animation:ease bubbleover .4s;
	animation:ease bubbleover .4s;
  -webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	top:-1.25em; /* If pseudo animation not supported [see https://css-tricks.com/transitions-and-animations-on-css-generated-content/], simple hover fallback happens*/
	z-index:1;
}

@-webkit-keyframes bubbleover {
  0%   {
  	-webkit-transform:translate(0, 1em);
  	z-index:-1
  	}
  50% {
  	-webkit-transform:translate(0, -.5em);
  	z-index:-1
  } 
  100% {
  	-webkit-transform:translate(0, 0);
  	z-index:1;
  	}
}

@keyframes bubbleover {
  0%   {
    top:0;
    transform:translate(0, 0);
    z-index:-1;
    }
  50% {
    transform:translate(0, -12px);
    z-index:-1
    } 
  100% {
    transform:translate(0, 6px);
    z-index:1;
    }
}
</style>
</head>
<body>
<h1>Hop Over Notification Badge</h1>
	<ul class=\"menu\">
		<li><a href=\"#\" data-bubble=\"117\">Messages</a></li>
		<li><a href=\"#\" data-bubble=\"4\">New Posts</a></li>
		<li><a href=\"#\" data-bubble=\"19\">Notifications</a></li>
		<li><a class=\"gold\" href=\"#\" data-bubble=\"1\">Hidden Coins</a></li>
	</ul>

<!-- Inspired by the tuts demo 'Menu Notification Badges Using HTML5 Data-Attributes' [https://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/menu-notification-badges-using-html5-data-attributes]. Forks and improvements welcome. -->
</body>
</html>",
    ),

    '23' => array(
        EST_FAVORIS => false,
        IMAGE => "animation3.png",
        ALT => "image animation",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 3",
        AUTHOR => 'Auteur cc',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
body{
  font-family: arial;
  background: #fff;
}

.name{
  color: #aaa;
  font-size: 12px;
  position: fixed;
  bottom: 10px;
  right: 10px;
  text-align: right;
}

.name div:first-of-type{
  font-size: 14px;
}

.name a{
  color: #aaa;
}

.name a:hover{
  color: #888;
}

.left{
  float: left;
}

.right{
  float: right;
}



.perspective{
  perspective: 1200px;
  -webkit-perspective: 1200px;
}

.tardis-wrap{
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;

  transform : translateZ(-300px);
  -webkit-transform : translateZ(-300px);
}

.tardis{
  position: relative;
  width: 200px;
  height: 200px;
  margin: 100px auto;
  
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;

  transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;

  transform: rotateX(-20deg) rotateY(-30deg);
  -webkit-transform: rotateX(-20deg) rotateY(-30deg);

  animation-name: spin;
  animation-duration: 5000ms;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes spin{
  from{
    transform: rotateX(-20deg) rotateY(0deg);
  }

  to{
    transform: rotateX(-20deg) rotateY(360deg);
  }
}



/*
#
# Begin details
#
*/
.tardis .side{
  position: absolute;
  top: 0px;
  left: 0px;
  width: 200px;
  height: 360px;
  background-color: #3f577d;
  
  box-shadow: inset 1px 0 0 #313d49, inset -1px 0 0 #313d49, inset 0 1px 0 #313d49, inset 0 -1px 0 #313d49;

  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  z-index: 1;
}

.side:nth-of-type(1){
  transform : translateZ(100px);
  -webkit-transform : translateZ(100px);
}

.side:nth-of-type(2){
  transform : rotateY(90deg) translateZ(100px);
  -webkit-transform : rotateY(90deg) translateZ(100px);
}

.side:nth-of-type(3){
  transform : rotateY(180deg) translateZ(100px);
  -webkit-transform : rotateY(180deg) translateZ(100px);
}

.side:nth-of-type(4){
  transform : rotateY(-90deg) translateZ(100px);
  -webkit-transform : rotateY(-90deg) translateZ(100px);
}

.tardis .roof{
  position: absolute;
  width: 200px;
  height: 200px;
  background-color: #3f577d;
  
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  
  transform : rotateX(-90deg) translateZ(-100px);
  -webkit-transform : rotateX(-90deg) translateZ(-100px);
  z-index: 2;
}


/* The top roof box */
.roof-top{
  position: absolute;
  
  left: 30px;
  width: 140px;
  height: 140px;
  z-index: 2; 
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
}

.top-lid{
  width: 140px;
  height: 140px;
  background-color: #355683;

  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  transform : rotateX(-90deg) translateZ(-89px);
  -webkit-transform : rotateX(-90deg) translateZ(-89px);
}

.roof-panel{
  position: absolute;
  width: 140px;
  height: 20px;
  background-color: #445d84;
  box-shadow: inset 1px 0 0 #313d49, inset -1px 0 0 #313d49, inset 0 1px 0 #313d49, inset 0 -1px 0 #313d49;
  top: -20px;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
}

.roof-panel.a{
  transform: rotateY(0deg) translateZ(70px);
  -webkit-transform: rotateY(0deg) translateZ(70px);
}

.roof-panel.b{
 transform: rotateY(90deg) translateZ(70px);
 -webkit-transform: rotateY(90deg) translateZ(70px);
}

.roof-panel.c{
  transform: rotateY(180deg) translateZ(70px);
  -webkit-transform: rotateY(180deg) translateZ(70px);
}

.roof-panel.d{
  transform: rotateY(-90deg) translateZ(70px);
  -webkit-transform: rotateY(-90deg) translateZ(70px);
}

/* Light */
.light{
  position: absolute;
  width: 40px;
  height: 40px;
  top: -60px;
  left: 85px;
  z-index: 3;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
}

.light-lid{
  width: 30px;
  height: 30px;
  background-color: #eee;
  

  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  transform : rotateX(-90deg) translateZ(-14px);
  -webkit-transform : rotateX(-90deg) translateZ(-14px);
}

.light .light-panel{
  position: absolute;
  width: 30px;
  height: 40px;
  
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
}

.light .light-panel .bottom{
  width: 30px;
  height: 12px;
  position: absolute;
  bottom: 0px;
  background-color: #355683;
  box-shadow: inset 1px 0 0 #313d49, inset -1px 0 0 #313d49, inset 0 1px 0 #313d49, inset 0 -1px 0 #313d49;
}

.light .light-panel .top{
  width: 30px;
  height: 28px;
  position: absolute;
  top: 0px;
  background-color: #eee;
  box-shadow: inset 1px 0 0 #fff, inset -1px 0 0 #fff, inset 0 1px 0 #fff, inset 0 -1px 0 #fff;
}

.light-panel.a{
  transform: rotateY(0deg) translateZ(15px);
  -webkit-transform: rotateY(0deg) translateZ(15px);
}
.light-panel.b{
  transform: rotateY(90deg) translateZ(15px);
  -webkit-transform: rotateY(90deg) translateZ(15px);
}
.light-panel.c{
  transform: rotateY(180deg) translateZ(15px);
  -webkit-transform: rotateY(180deg) translateZ(15px);
}
.light-panel.d{
  transform: rotateY(-90deg) translateZ(15px);
  -webkit-transform: rotateY(-90deg) translateZ(15px);
}


/* Floor */
.tardis .floor{
  position: absolute;
  width: 220px;
  height: 220px;
  left: -10px;
  top: 360px;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
}

.floor-lid{
  position: absolute;
  width: 220px;
  height: 220px;
  background-color: #355683;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  transform: rotateX(90deg) translateZ(109px);;
  -webkit-transform: rotateX(90deg) translateZ(109px);;
}

.floor-panel{
  position: absolute;
  width: 220px;
  height: 10px;
  background-color: #3f577d;
  box-shadow: inset 1px 0 0 #313d49, inset -1px 0 0 #313d49, inset 0 1px 0 #313d49, inset 0 -1px 0 #313d49;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
}

.floor-panel.a{
  transform: rotateY(0deg) translateZ(110px);
  -webkit-transform: rotateY(0deg) translateZ(110px);
}

.floor-panel.b{
 transform: rotateY(90deg) translateZ(110px);
 -webkit-transform: rotateY(90deg) translateZ(110px);
}

.floor-panel.c{
  transform: rotateY(180deg) translateZ(110px);
  -webkit-transform: rotateY(180deg) translateZ(110px);
}

.floor-panel.d{
  transform: rotateY(-90deg) translateZ(110px);
  -webkit-transform: rotateY(-90deg) translateZ(110px);
}







/*
#
# Top sign
#
*/
.side .top-sign{
  width: 180px;
  height: 28px;
  background-color: #445d84; 
  border: solid 1px #54749f;
  box-shadow: 0px 2px 4px rgba(0,0,0,.4);
  border-radius: 2px;
  position: absolute;
  top: 10px;
  left: 10px;

  z-index: 10;
}

.top-sign .text{
  background-color: #28394d;
  border: solid 1px #54749f;
  border-radius: 2px;
  width: 100px;
  margin: 3px auto;
  height: 20px;
  color: #fff;
  font-size: 12px;
  line-height: 20px;
  padding: 0px 5px;
  box-shadow: inset 0px 0px 3px rgba(0,0,0,.4);
  position: relative;

  text-shadow: 0px 0px 4px rgba(255,255,255, .6);
}

.text .tiny{
  font-size: 4px;
  line-height: 6px;
  text-align: center;
  width: 20px;
  position: absolute;
  right: 35px;
  top: 4px;
}

/*
#
# Door frame
#
*/
.side .door-frame{
  position: absolute;
  width: 160px;
  left: 20px;
  top: 35px;
  bottom: 0px;

  background-color: #445d84; 
  
  box-shadow:inset 0px 2px 8px rgba(0,0,0,.5);

  z-index: 5;
}


.door-frame .door{
  position: absolute;
  top: 0px;
  bottom: 0px;
  width: 77px;

  box-shadow:inset 0px 0px 3px rgba(0,0,0,.7);
}

.door.door-left{
  left: 0px;
}

.door.door-right{
  right: 0px;
}

/* Insets */
.door .door-inset{
  position: absolute;
  left: 10px;
  bottom: 10px;

  width: 55px;
  height: 65px;
  box-shadow:inset 0px .5px 5px rgba(0,0,0,.5);
}

.door-inset:nth-of-type(2){
  bottom: 85px;
}

.door-inset:nth-of-type(3){
  bottom: 160px;
}

/* Sign */
.door .sign{
  position: absolute;
  left: 15px;
  bottom: 165px;
  width: 45px;
  height: 55px;
  background-color: #d5e4f6;
  box-shadow: inset 1px 0 0 #313d49, inset -1px 0 0 #313d49, inset 0 1px 0 #313d49, inset 0 -1px 0 #313d49;
}

/* Window */
.door .window{
  position: absolute;
  left: 10px;
  bottom: 235px;

  width: 55px;
  height: 65px;
  background-color: #28475d;
}

.window .pane{
  width: 14px;
  height: 28px;
  background-color: #dfe7fc;
  float: left;
  margin: 2px;
  box-shadow: inset 0px 0px 10px #fff;
}

.pane.a{
  margin-left: 3px;
  margin-right: 1px;
}

.pane.d{
  margin-left: 3px;
  margin-right: 1px;
}
</style>
</head>
<body>

<html>
<head>
  <title>Tardis</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body>
  <div class=\"name\">
    <div>Gerwin van Royen</div>
    <div><a target=\"_blank\" href=\"https://www.twitter.com/gerwinvanroyen\">@gerwinvanroyen</a></div>
  </div>
  <div class=\"perspective\">
    


    <div class=\"tardis-wrap\">
    <div class=\"tardis\">
      <!-- start of side -->
      <div class=\"side\">
        <div class=\"top-sign\">
          <div class=\"text\">
            <span class=\"left\">POLICE</span>
            <span class=\"tiny\">PUBLIC CALL</span>
            <span class=\"right\">BOX</span>
          </div>
        </div>
        <div class=\"door-frame\">
          <div class=\"door door-left\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"sign\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
          <div class=\"door door-right\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of side -->

      <!-- start of side -->
      <div class=\"side\">
        <div class=\"top-sign\">
          <div class=\"text\">
            <span class=\"left\">POLICE</span>
            <span class=\"tiny\">PUBLIC CALL</span>
            <span class=\"right\">BOX</span>
          </div>
        </div>
        <div class=\"door-frame\">
          <div class=\"door door-left\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
          <div class=\"door door-right\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of side -->

      <!-- start of side -->
      <div class=\"side\">
        <div class=\"top-sign\">
          <div class=\"text\">
            <span class=\"left\">POLICE</span>
            <span class=\"tiny\">PUBLIC CALL</span>
            <span class=\"right\">BOX</span>
          </div>
        </div>
        <div class=\"door-frame\">
          <div class=\"door door-left\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
          <div class=\"door door-right\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of side -->

      <!-- start of side -->
      <div class=\"side\">
        <div class=\"top-sign\">
          <div class=\"text\">
            <span class=\"left\">POLICE</span>
            <span class=\"tiny\">PUBLIC CALL</span>
            <span class=\"right\">BOX</span>
          </div>
        </div>
        <div class=\"door-frame\">
          <div class=\"door door-left\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
          <div class=\"door door-right\">
            <div class=\"door-inset\"></div>
            <div class=\"door-inset b\"></div>
            <div class=\"door-inset c\"></div>
            <div class=\"window\">
              <div class=\"pane a\"></div><div class=\"pane b\"></div><div class=\"pane c\"></div>
              <div class=\"pane d\"></div><div class=\"pane e\"></div><div class=\"pane f\"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of side -->

      <div class=\"roof\"></div>


      <div class=\"roof-top\">
        <div class=\"roof-panel a\"></div>
        <div class=\"roof-panel b\"></div>
        <div class=\"roof-panel c\"></div>
        <div class=\"roof-panel d\"></div>
        <div class=\"top-lid\"></div>
      </div>


      <div class=\"light\">
        <div class=\"light-panel a\"><div class=\"bottom\"></div><div class=\"top\"></div></div>
        <div class=\"light-panel b\"><div class=\"bottom\"></div><div class=\"top\"></div></div>
        <div class=\"light-panel c\"><div class=\"bottom\"></div><div class=\"top\"></div></div>
        <div class=\"light-panel d\"><div class=\"bottom\"></div><div class=\"top\"></div></div>
        <div class=\"light-lid\"></div>
      </div>


      <!-- start of floor -->
      <div class=\"floor\">
        <div class=\"floor-panel a\"></div>
        <div class=\"floor-panel b\"></div>
        <div class=\"floor-panel c\"></div>
        <div class=\"floor-panel d\"></div>
        <div class=\"floor-lid\"></div>
      </div>
      <!-- end of floor -->


    </div>
    </div>


  </div>
</body>
</html>
</body>
</html>",
    ),

    '24' => array(
        EST_FAVORIS => false,
        IMAGE => "animation4.png",
        ALT => "image animation4",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 4",
        AUTHOR => 'Bob',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
@import \"compass/css3\";

@media (min-width: 768px) {
  
  body {
    background-color: #45484d;
    @include filter-gradient(#45484d, #000000, vertical);
    @include background-image(linear-gradient(top,  #45484d 0%,#000000 100%));
    background-repeat: no-repeat;
    background-size: 500%;
  }
  
  container {
    max-width: 700px;
  }
  
  .animate {
    -moz-animation: colorChange 5s linear infinite;
    -webkit-animation: colorChange 5s linear infinite;
    margin-top: 100px;
  }

      @-moz-keyframes colorChange {
        0% {color: rgba(0,0,0,1)}
        20% {color: rgba(255,0,0,1)}
        40% {color: rgba(255,255,0,1)}
        60% {color: rgba(0,255,255,1)}
        80% {color: rgba(255,0,255,1)}
        100% {color: rgba(0,0,0,1)}
      }

      @-webkit-keyframes colorChange {
        0% {color: rgba(0,0,0,1)}
        20% {color: rgba(255,0,0,1)}
        40% {color: rgba(255,255,0,1)}
        60% {color: rgba(0,255,255,1)}
        80% {color: rgba(255,0,255,1)}
        100% {color: rgba(0,0,0,1)}
      }
    }
</style>
</head>
<body>
<div class=\"col-xs-4\"> <!-- Used for centering --> </div>

<div id=\"oBorder\">
  <div class=\"col-xs-4\">
      <div class=\"container\">
         <div class=\"animate\">
           <h1> Je change de couleur! </h1>
         </div>
      </div>
  </div>
</div>

<div class=\"col-xs-4\"> <!-- Used for centering --> </div>
</body>
</html>",
    ),

    /*'25' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 5",
        AUTHOR => 'Auteur ee',
        CODE => "",
    ),

    '26' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 6",
        AUTHOR => 'Auteur ff',
        CODE => "",
    ),

    '27' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 7",
        AUTHOR => 'Auteur gg',
        CODE => "",
    ),

    '28' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 8",
        AUTHOR => 'Auteur hh',
        CODE => "",
    ),
    '29' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "2",
        NAME_SUBCATEGORY => "Animations 9",
        AUTHOR => 'Auteur ii',
        CODE => "",
    ),*/
    '31' => array(
        EST_FAVORIS => false,
        IMAGE => "transition1.png",
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
        EST_FAVORIS => false,
        IMAGE => "transition2.png",
        ALT => "image trnasition",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "effet hamburger",
        AUTHOR => 'Auteur bbb',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
.spinner-master * {transition:all 0.3s;-webkit-transition:all 0.3s;box-sizing:border-box;}

.spinner-master {position:relative;margin:50px auto;height:50px;width:50px;}

.spinner-master input[type=checkbox] {display:none;}
.spinner-master label {cursor:pointer;position:absolute;z-index:99;height:100%;width:100%;top:10px;left:0;}

.spinner-master .spinner {position:absolute;height:5px;width:100%;background-color:#000;}

.spinner-master .diagonal.part-1 {position:relative;float:left;}
.spinner-master .horizontal {position:relative;float:left;margin-top:6px;}
.spinner-master .diagonal.part-2 {position:relative;float:left;margin-top:6px;}

.spinner-master input[type=checkbox]:checked ~ .spinner-spin > .horizontal {opacity: 0;}
.spinner-master input[type=checkbox]:checked ~ .spinner-spin > .diagonal.part-1 {transform:rotate(405deg);-webkit-transform:rotate(405deg);margin-top:10px;}
.spinner-master input[type=checkbox]:checked ~ .spinner-spin > .diagonal.part-2 {transform:rotate(-405deg);-webkit-transform:rotate(-405deg);margin-top:-16px;}

/*SECOND VERSION*/
.spinner-master2 * {transition:all 0.3s;-webkit-transition:all 0.3s;box-sizing:border-box;}

.spinner-master2 {position:relative;margin:50px auto;height:50px;width:50px;}

.spinner-master2 input[type=checkbox] {display:none;}
.spinner-master2 label {cursor:pointer;position:absolute;z-index:99;height:100%;width:100%;top:10px;left:0;}

.spinner-master2 .spinner2 {position:absolute;height:5px;width:100%;background-color:#000;}

.spinner-master2 .diagonal.part-1 {position:relative;float:left;}
.spinner-master2 .horizontal {position:relative;float:left;margin-top:7px;}
.spinner-master2 .diagonal.part-2 {position:relative;float:left;margin-top:6px;}

.spinner-master2 input[type=checkbox]:checked ~ .spinner-spin2 > .horizontal {opacity: 0;}
.spinner-master2 input[type=checkbox]:checked ~ .spinner-spin2 > .diagonal.part-1 {transform:rotate(135deg);-webkit-transform:rotate(135deg);margin-top:10px;}
.spinner-master2 input[type=checkbox]:checked ~ .spinner-spin2 > .diagonal.part-2 {transform:rotate(-135deg);-webkit-transform:rotate(-135deg);margin-top:-16px;}

/*THIRD VERSION*/
.spinner-master3 * {transition:all 0.3s;-webkit-transition:all 0.3s;box-sizing:border-box;}

.spinner-master3 {position:relative;margin:50px auto;height:50px;width:50px;}

.spinner-master3 input[type=checkbox] {display:none;}
.spinner-master3 label {cursor:pointer;position:absolute;z-index:99;height:100%;width:100%;top:10px;left:0;}

.spinner-master3 .spinner3 {position:absolute;height:5px;width:100%;background-color:#000;}

.spinner-master3 .diagonal.part-1 {position:relative;float:left;}
.spinner-master3 .horizontal {position:relative;float:left;margin-top:6px;}
.spinner-master3 .diagonal.part-2 {position:relative;float:left;margin-top:6px;}

.spinner-master3 input[type=checkbox]:checked ~ .spinner-spin3 > .horizontal {transform:scale(2,1);-webkit-transform:scale(2,1); opacity: 0;}
.spinner-master3 input[type=checkbox]:checked ~ .spinner-spin3 > .diagonal.part-1 {transform:rotate(-135deg);-webkit-transform:rotate(-135deg);margin-top:10px;}
.spinner-master3 input[type=checkbox]:checked ~ .spinner-spin3 > .diagonal.part-2 {transform:rotate(135deg);-webkit-transform:rotate(135deg);margin-top:-16px;}

/*FORTH VERSION*/
.spinner-master4 * {transition:all 0.3s;-webkit-transition:all 0.3s;box-sizing:border-box;}

.spinner-master4 {position:relative;margin:50px auto;height:50px;width:50px;}

.spinner-master4 input[type=checkbox] {display:none;}
.spinner-master4 label {cursor:pointer;position:absolute;z-index:99;height:100%;width:100%;top:10px;left:0;}

.spinner-master4 .spinner4 {position:absolute;height:5px;width:100%;background-color:#000;}

.spinner-master4 .diagonal.part-1 {position:relative;float:left;}
.spinner-master4 .horizontal {position:relative;float:left;margin-top:6px;}
.spinner-master4 .diagonal.part-2 {position:relative;float:left;margin-top:6px;}

.spinner-master4 input[type=checkbox]:checked ~ .spinner-spin4 > .horizontal {transform:translate(-100px, 0px);-webkit-transform:translate(-100px, 0px); opacity: 0;}
.spinner-master4 input[type=checkbox]:checked ~ .spinner-spin4 > .diagonal.part-1 {transform:rotate(-135deg);-webkit-transform:rotate(-135deg);margin-top:10px;}
.spinner-master4 input[type=checkbox]:checked ~ .spinner-spin4 > .diagonal.part-2 {transform:rotate(135deg);-webkit-transform:rotate(135deg);margin-top:-16px;}
</style>
</head>
<body>

<div class=\"spinner-master\">
  <input type=\"checkbox\" id=\"spinner-form\" />
  <label for=\"spinner-form\" class=\"spinner-spin\">
    <div class=\"spinner diagonal part-1\"></div>
    <div class=\"spinner horizontal\"></div>
    <div class=\"spinner diagonal part-2\"></div>
  </label>
</div>
<div class=\"spinner-master2\">
  <input type=\"checkbox\" id=\"spinner-form2\" />
  <label for=\"spinner-form2\" class=\"spinner-spin2\">
    <div class=\"spinner2 diagonal part-1\"></div>
    <div class=\"spinner2 horizontal\"></div>
    <div class=\"spinner2 diagonal part-2\"></div>
  </label>
</div>
<div class=\"spinner-master3\">
  <input type=\"checkbox\" id=\"spinner-form3\" />
  <label for=\"spinner-form3\" class=\"spinner-spin3\">
    <div class=\"spinner3 diagonal part-1\"></div>
    <div class=\"spinner3 horizontal\"></div>
    <div class=\"spinner3 diagonal part-2\"></div>
  </label>
</div>
<div class=\"spinner-master4\">
  <input type=\"checkbox\" id=\"spinner-form4\" />
  <label for=\"spinner-form4\" class=\"spinner-spin4\">
    <div class=\"spinner4 diagonal part-1\"></div>
    <div class=\"spinner4 horizontal\"></div>
    <div class=\"spinner4 diagonal part-2\"></div>
  </label>
</div>
</body>
</html>",
    ),

    '33' => array(
        EST_FAVORIS => false,
        IMAGE => "transition3.png",
        ALT => "image transiiton",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 3",
        AUTHOR => 'Auteur ccc',
        CODE => "<!DOCTYPE html>
<html>
<head>
<style>
* { box-sizing:border-box; }

/* basic stylings ------------------------------------------ */
body 				 { background:url(https://scotch.io/wp-content/uploads/2014/07/61.jpg); }
.container 		{ 
  font-family:'Roboto';
  width:600px; 
  margin:30px auto 0; 
  display:block; 
  background:#FFF;
  padding:10px 50px 50px;
}
h2 		 { 
  text-align:center; 
  margin-bottom:50px; 
}
h2 small { 
  font-weight:normal; 
  color:#888; 
  display:block; 
}
.footer 	{ text-align:center; }
.footer a  { color:#53B2C8; }

/* form starting stylings ------------------------------- */
.group 			  { 
  position:relative; 
  margin-bottom:45px; 
}
input 				{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
}
input:focus 		{ outline:none; }

/* LABEL ======================================= */
label 				 {
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label 		{
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

/* BOTTOM BARS ================================= */
.bar 	{ position:relative; display:block; width:300px; }
.bar:before, .bar:after 	{
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
</style>
</head>
<body>

<div class=\"container\">
  
  <h2>Google Material Design in CSS3<small>Inputs</small></h2>
  
  <form>
    
    <div class=\"group\">      
      <input type=\"text\" required>
      <span class=\"highlight\"></span>
      <span class=\"bar\"></span>
      <label>Name</label>
    </div>
      
    <div class=\"group\">      
      <input type=\"text\" required>
      <span class=\"highlight\"></span>
      <span class=\"bar\"></span>
      <label>Email</label>
    </div>
    
  </form>
      
  <p class=\"footer\">
    a <a href=\"https://scotch.io/tutorials/css/google-material-design-input-boxes-in-css3\" target=\"_blank\">tutorial</a> by <a href=\"https://scotch.io\" target=\"_blank\">scotch.io</a>
  </p>
  
</div>
</body>
</html>",
    ),

    /*'34' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 4",
        AUTHOR => 'Auteur ddd',
        CODE => "",
    ),

    '35' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 5",
        AUTHOR => 'Auteur eee',
        CODE => "",
    ),

    '36' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 6",
        AUTHOR => 'Auteur fff',
        CODE => "",
    ),

    '37' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 7",
        AUTHOR => 'Auteur ggg',
        CODE => "",
    ),

    '38' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 8",
        AUTHOR => 'Auteur hhh',
        CODE => "",
    ),

    '39' => array(
        EST_FAVORIS => false,
        IMAGE => "bouton1.png",
        ALT => "image bouton1",
        NAME_CATEGORY => "3",
        NAME_SUBCATEGORY => "Transitions 9",
        AUTHOR => 'Auteur iii',
        CODE => "",
    ),*/

);
