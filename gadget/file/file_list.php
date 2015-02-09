<?php

$dir = 'c:/windows/system32/';

if (is_dir($dir)) {
	if ($handle = opendir($dir)) {
		$sigla = array('', 'k', 'M', 'G', 'T', 'P');

		/* Esta na forma correta de varrer o diretorio */
		while (false !== ($file = readdir($handle))) {

			$file = trim($file);
			echo '<BR>=>' . $file;

			if (is_dir($dir . $file)) {
				echo ' [DIR]';
			} else {
				$size = filesize($dir . $file);
				$dv = 0;
				while ($size >= 1024) {
					$size = ($size / 1024);
					$dv++;
				}
				echo '.', number_format($size, 1) . $sigla[$dv] . ' byte';
			}

			if ((substr($file, 0, 1) != '.') and (!(is_dir($dir . '/' . $file)))) {
				//echo "<BR>==>$dir/$file\n";
				//echo '<font class="blue">ok</font>';
				array_push($css, $dir . '/' . $file);
			}
		}
		closedir($handle);
	} else {
		echo 'Directory not found';
		exit ;
	}
	print_r($css);
}
?>
