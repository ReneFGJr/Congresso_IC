<?php
require("db.php");
require("_class/_class_header.php");
$hd = new header;

echo $hd->head();
echo $hd->cab();

require("_class/_class_login.php");
$us = new login;

$sc = round($us->security());

$page = page();
if ($sc != 1)
	{
		if (!($page == '_login.php'))
			{
				redirecina($http."_login.php");
			}
	}

echo '
<style>
body
	{
		background-image: url("img/background/back-02.jpg");
		background-height: 100%;
		background-size: auto 100%;
    	/* background-repeat: no-repeat; */
		background-repeat: repeat-x;
		background-attachment: fixed;
	}
</style>';
echo '<BR><BR>';
?>

