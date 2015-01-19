<?php
require("db.php");
require("_class/_class_header.php");
$hd = new header;

echo $hd->head();
echo $hd->cab();

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

