<?php
include("../res/x5engine.php");
$nameList = array("g8a","xrd","77s","z8x","nc4","r86","vez","ust","gz2","cmj");
$charList = array("3","N","6","S","T","F","X","U","W","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
