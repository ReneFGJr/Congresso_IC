<?php
class works
	{
		function resumo()
			{
				$tot = array(0,0,0,0);
				$lk = array('','','','');

				$sx .= '<h3>Resumo das submiss�es</h3>';				
				$sx .= '<table width="600" align="center" class="tabela01">';
				$sx .= '<TR class="lt1" align="center">';
				$sx .= '<TD width="25%">Em submiss�o';
				$sx .= '<TD width="25%">Submetidos';
				$sx .= '<TD width="25%">Aprovados';
				$sx .= '<TD width="25%">N�o Aprovados';
				$sx .= '<TR class="lt4" align="center">';
				$sx .= '<TD width="25%">'.$lk[0].$tot[0];
				$sx .= '<TD width="25%">'.$lk[1].$tot[1];
				$sx .= '<TD width="25%">'.$lk[2].$tot[2];
				$sx .= '<TD width="25%">'.$lk[3].$tot[3];
				$sx .= '</table>';
				return($sx);
			}	
	}
?>
