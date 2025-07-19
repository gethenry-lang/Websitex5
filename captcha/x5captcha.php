<?php
include("../res/x5engine.php");
$nameList = array("e86","vr5","zyv","ene","fme","x86","gl8","zmm","zrf","pt6");
$charList = array("C","F","C","7","2","U","S","Y","5","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
