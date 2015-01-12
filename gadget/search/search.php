<?php
$file = 'search.txt';

// "ensino" or "aprendizagem" or "educação"
$cn = "\$R = (\$T1 OR \$T2 OR \$T3); ";
$cf = "\$ok = (\$tr[0] OR \$tr[1] OR \$tr[2]); ";
$cf = "\$ok = (\$tr[0] AND \$tr[1] AND OR \$tr[2]); ";

$rlt = fopen($file, 'r');
$tm = array('ENSINO','APRENDIZAGEM','EDUCACAO');

$arrayArquivo = file($file);
$id = 0;

for ($i = 0; $i < sizeof($arrayArquivo); $i++) {;

	$tr = array(0,0,0);
	
	$rs = 0;
	$ok = 0;
	for ($r=0;$r < count($tm);$r++)
		{
			if (strpos($arrayArquivo[$i], $tm[$r]))
				{
					$tr[$r] = '1';
					$rs++; 
				}
		}
		
	eval($cf);
	echo '==>'.$ok;
	echo '<BR><font color="blue">'.$tr[0].'-'.$tr[1].'-'.$tr[2].'</font>';
	
	/* Validador */
	if ($ok==1)
		{
			$id++;
			echo $arrayArquivo[$i];
			echo '<HR>';
		}
}
echo 'FIM - '.$id;
?>