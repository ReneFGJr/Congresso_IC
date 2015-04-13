<?php
require("../../cab.php");

$palavra = trim($_POST["palavra"]);
$captcha = trim($_SESSION['captcha']); 

if (($palavra == $captcha) and (strlen($palavra) > 0)) {
	echo "<h1>Voce Acertou</h1>";
} else {
	echo "<h1>Voce nao acertou!</h1>";
	echo "<a href='index.php'>Retornar</a>";
}
?>