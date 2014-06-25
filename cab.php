<?php
$LANG = 'pt';
$idv = substr(date("s"),1,1);
$idv = '4';
$video = '';

require("db.php");

function msg($x) 
	{
	switch ($x)
		{
		case '1': $x = '1'; break;
		}	
	return($x);
	}
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js wf-loading"> <!--<![endif]-->
	
	
	<head>
	    <meta charset="iso-8859-1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="description" content="Encontro Sul de Iniciação Científica e Pós-Graduação">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
		<title>III CIC - PG - PUCPR</title>
		<link rel="stylesheet" href="css/new-header-main.css">
		<link rel="stylesheet" href="css/new-header-mobile.css">
		<link rel="stylesheet" href="css/ic_cab_top.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery.maskedinput.js"></script>
		<script src="js/scrooling.js"></script>
		
	    <link rel="icon" type="img/png" href="favicon.png">
	    
		<meta name="viewport" content="initial-scale=1">
	</head>
	<body>
	<?
	require("cab_top_menu.php");
	?>		
		<div class="wrapper">
	    <!--[if lt IE 7]>
	        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	    <![endif]-->

