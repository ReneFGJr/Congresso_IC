<?php
require("cab.php");
require("_class/_class_login.php");
$l = new login;

require($include.'_class_form.php');
echo '<link rel="STYLESHEET" type="text/css" href="css/sisdoc_login.css">';

require($include.'sisdoc_debug.php');
echo '<BR><BR><h1>Login</h1>';

echo $l->login_form();

echo 'OK';
?>
