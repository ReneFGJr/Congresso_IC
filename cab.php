<?php
/* Busca DB */
$db = 'db.php'; $lp = 0; $path_db = '';
while (!file_exists($path_db.$db))
	{
		/* Arquivo não existe */
		$lp++;
		if ($lp > 10) { die("file db.php not found"); exit;}
		$path_db .= '../';
	}
$db = $path_db.$db;	
require($db);

/* deafult styles */
if (!isset($style_add)) { $style_add = array(); }
array_push($style_add,'scheme_default.css');

/* defaults js */
if (!isset($js_add)) { $js_add = array(); }

/* Root dir */
$http = '/projeto/phpProjectStart/';

/* header class */
require($path_db."_class/_class_header.php");
$hd = new header;
/* Parametros */
$hd->title = 'Projeto Starter';

/* Active Page */
if (!(isset($page_active))) { $page_active = -1; /* Sem pagina ativa */ }

/* Display */
/* Header e codepage */
echo $hd->head();

/* Menu top */
$menu = array();
array_push($menu,array($http.'index.php','HOME'));
array_push($menu,array($http.'gadget/index.php','GADGET'));
/* Adiciona itens no menu */
if (isset($menu_add))
	{
		for ($r=0;$r < count($menu_add);$r++)
			{ array_push($menu,$menu_add[$r]); }
	}
	

/* Valida login do usuario */
/* User autentication */
require("_class/_class_login.php");
$user = new login;
$sc = round($user->security());

/* Cabecalho */
$cab = '<div id="cab_name">'.$hd->title.'</div>';

/* Adiciona logout */
if ($sc == 1)
	{
		array_push($menu,array($http.'logout.php','LOGOUT','right'));
		/* Monta cabecalho */
		$cab .= $user->show_user();
	} else {
		if (!($page == '_login.php'))
			{
				redirecina($http."_login.php");
			}
		$menu = array();		
	}
	
/* Enviao itens do menu */
$hd->menu = $menu;

/* Cabecalho e Top menu */
echo $hd->cab($cab);
echo $hd->topmenu();

/* Content */
echo '<div id="content">';	
?>

