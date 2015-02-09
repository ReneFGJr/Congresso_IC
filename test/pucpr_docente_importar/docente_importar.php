<?php
require ("../../cab.php");
require ($include . 'sisdoc_debug.php');
require("../../../CIP/_class/_class_importar_docente.php");
$in = new importa_docente;

require ($include . '_class_io.php');
$io = new io;

$fl = 'd:\lixo\PROFESSOR-2014-10.csv';
$f = $io -> a_loadfile($fl);
echo '<h1>Importar</h1>';



echo count($f);
echo '<TT>';

$sqlu = "";

//for ($r = 1; $r < count($f); $r++) {
for ($r = 1; $r < 20; $r++) {
	/* Trata a linha recuperada */
	$t = $f[$r];
	$t = troca($t, chr(15), '');
	while (strpos($t, '  ')) { $t = troca($t, '  ', ' ');
	}
	$t = troca($t, '; ;', ';;');
	$t = troca($t, '; ;', ';;');
	while (strpos($t, ';;')) { $t = troca($t, ';;', ';0;');
	}
	/* Linha para processamento */
	//echo '<HR>' . $t . '<HR>';
	$d = splitx(';', $t);

	/* dados */
	$data = date("Ymd");
	$cracha_lng = $d[1];
	$cracha = substr($d[1], 3, 8);
	$titulacao = $in -> busca_codigo_titulacao($d[2]);
	$regime = $in -> busca_codigo_regime_de_trabalho($d[3]);
	$campus = $in -> busca_codigo_campus($d[6]);
	$curso = $in -> busca_codigo_curso($d[8]);
	$escola = $in -> busca_codigo_escola($d[7]);
	$nivel = substr($d[13],0,1);

	$h1 = round($d[18]);
	$h2 = round($d[19]);
	$h3 = round($d[20]);
	$h4 = round($d[21]);
	$h5 = round($d[22]);
	$h6 = round($d[23]);
	$h7 = round($d[24]);
	$h8 = round($d[25]);
	$h9 = round($d[26]);
	$h10 = round($d[27]);
	$h11 = round($d[28]);
	$h12 = round($d[29]);

	$sqli .= "insert into docente_ch 
		(
		ch_cracha_log, ch_cracha, ch_titulacao,
		ch_regime, ch_escola, ch_curso, 
		ch_nivel, ch_campus
		
		ch_hr_adm, ch_hr_compl, ch_hr_matice, 
		ch_hr_direcao, ch_hr_exe_jud, ch_hr_letiva, 
		ch_hr_licenca, ch_hr_pos, ch_hr_otcc, 
		ch_hr_perman, ch_hr_perman_de, ch_hr_total, 
		ch_ativo, ch_update
		) values (
		'$cracha_lng','$cracha','$titulacao',
		'$regime','$escola','$curso',
		'$nivel',		
		$h1, $h2, $h3,
		$h4, $h5, $h6,
		$h7, $h8, $h9,
		$h10,$h11,$h12,
		1,$data
		);
	" . chr(13) . chr(10);
}
echo '<PRE>';
echo $sqli;
echo '</PRE>';
?>
