<?
/*
 * DB File
 * @author Rene Faustino Gabriel Junior <renefgj@gmail.com>
 * @date 2015-04-12
 */
 
/* Start Session and Cookies */
ob_start();
session_start();

/* Set Zone Time */
date_default_timezone_set('UTC');

/* Desative Erros Mensages */
ini_set('display_errors', 0);
ini_set('error_reporting', 0);

//-------------------------------------- Igames and Files Directory
$dir = $_SERVER['DOCUMENT_ROOT'];

/* Find Include Directory */
$path = array();
$include = '_include/';
$escape = 6;
while (!is_dir($include))
	{
		$escape--;
		if ($escape == 0)
			{ die("Directory _include not found!"); exit; }
		$include = "../".$include;
	}

/* Start Library */
require($include."sisdoc_char.php"); 
require($include."sisdoc_sql.php"); 
require($include."sisdoc_msg.php");
if ($debug == True) { require($include.'sisdoc_debug.php'); }

/* Code page */
$charset = "ISO-8859-1";

/* Meger GET and POST */
$vars = array_merge($_GET, $_POST);
for ($k=0;$k < 100;$k++)
	{
	$varf='dd'.$k;
	$varf=$vars[$varf];
	//if (isset($varf) and ($k > 1)) {	//$varf = str_replace($varf,"A","�"); }
	$dd[$k] = troca($varf,"'","´");
	}
$acao = $vars['acao'];
$nocab = $vars['nocab'];

//-------------------------------------- Recuperar dados de GET / POST
function getServerHost() {
return isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST']
		: (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST']
		: (isset($_SERVER['HOSTNAME']) ? $_SERVER['HOSTNAME']
		: 'localhost'));
}

/* Page */
$page = page();

/*
 * Conectar com bases de dados
 */
$db = '_db/_db.php';
if (file_exists($db)) { require($db); }

?>