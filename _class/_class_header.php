<?php
/**
 * Header Fz
 * @author Rene Faustino Gabriel Junior <renefgj@gmail.com> (Analista-Desenvolvedor)
 * @copyright Copyright (c) 2014 - sisDOC.com.br
 * @access public
 * @version v.0.14.21
 * @package _class
 * @subpackage _class_header.php
 */

class header {
	var $charcod = "UTF-8";
	/* var $charcod = "ISO-8859-1"; */

	/* Google Ids */
	var $google_id = '';
	/* Ex: UA-12712904-10 */
	var $login_api = '';
	var $expire_session = 0;

	/* About this site */
	var $title = ':: Project Name ::';
	var $description = '';
	var $cab = '';
	var $cab_menutop = '';

	var $http = '';
	var $path = '';

	var $email = '';
	var $email_type = '';
	var $email_name = '';
	var $email_smtp = '';
	
	var $menu = array();

	function foot() {
		$sx = '';
		$sx .= '<div id="foot">';
		$sx .= '&copy; ' . date("Y") . '- sisDOC ';
		$sx .= '</div>';
		$sx .= '</head>';
		return ($sx);
	}

	function head() {
		global $LANG, $http, $style_add, $js_add, $include;
		$cr = chr(13) . chr(10);
		$pth = $this -> path;
		
		/* Checa se a variavel $http está definida */
		if (strlen($http) == 0) { msg_erro('$http not defined in db.php',0); }
		
		/* Checa se a variavel $http está definida */
		if (strlen($this->charcod) == 0) { msg_erro('charset not defined in object Header',0); }
		

		$sx = '<head>' . $cr;
		if ($this -> expire_session > 0) {
			$sx .= '<META HTTP-EQUIV=Refresh CONTENT="3600; URL=' . $http . 'logout.php">' . $cr;
		}

		/* Charset */
		header('Content-type: text/html; charset=' . $this -> charcod);
		$sx .= '<meta http-equiv="Content-Type" content="text/html; charset=' . $this -> charcod . '" />';

		/* Meta Information */
		$sx .= '<meta name="description" content="' . $this -> description . '">' . $cr;
		$sx .= '<link rel="shortcut icon" type="image/x-icon" href="' . $http . 'favicon.ico" />' . $cr;

		/* Add Style File */
		$style = array('prj_style.css', 'fonts_cicpg.css','fonts_roboto.css');
		for ($r = 0; $r < count($style); $r++) { $sx .= '<link rel="STYLESHEET" type="text/css" href="' . $http . 'css/' . $style[$r] . '">' . $cr;
		}

		/* Style Additional */
		if (is_array($style_add)) {
			for ($r = 0; $r < count($style_add); $r++) { $sx .= '<link rel="STYLESHEET" type="text/css" href="' . $http . 'css/' . $style_add[$r] . '">' . $cr;
			}
		}

		/* Add Java script */
		$js = array('jquery.js', 'jquery.maskedit.js', 'jquery.maskmoney.js', 'windows.js');
		for ($r = 0; $r < count($js); $r++) { $sx .= '<script type="text/javascript" src="' . $http . 'js/' . $js[$r] . '"></script>' . $cr;
		}

		/* Style Additional */
		if (is_array($js_add)) {
			for ($r = 0; $r < count($js_add); $r++) { $sx .= '<script type="text/javascript" src="' . $http . 'js/' . $js_add[$r] . '"></script>' . $cr;
			}
		}

		$sx .= '<title>' . $this -> title . '</title>' . $cr;
		$sx .= '</meta>';
		return ($sx);
	}

	function topmenu()
		{
			global $page_active;
			$page_active = round($page_active);
			$mn = $this->menu;
			$cr = chr(13) . chr(10);
			$sx = '';
			$sx .= '<div id="nav">'.$cr;
			$sx .= '<ul>'.$cr;
			for ($r = 0;$r < count($mn); $r++)
				{
					
					$css = $mn[$r][2];
					if (strlen($css) > 0)
						{
							$cs = ' class="'.$css.'" ';
						} else {
							$cs = '';
						}
						
					/* Active */
					if ($page_active == $r)
						{
							$cs .= ' class="active" ';
						}
					
					$sx .= '<li '.$cs.'><span>';
					$sx .= '<A HREF="'.$mn[$r][0].'">'.$mn[$r][1].'</A>';
					$sx .= '</span></li>'.$cr;
				}
			$sx .= '</ul>'.$cr;
			$sx .= '</div>'.$cr;
			return($sx);
		}

	function cab($cab) {
		$sx = '<div id="cab">';
		$sx .= $cab;
		$sx .= '</div>';
		return ($sx);
	}

	function retornar_para_pagina_principal() {
		global $cr;
		$sx = '<script>';
		$sx .= 'opener.location.reload();';
		$sx .= 'window.close();';
		$sx .= '</script>';
		echo $sx;
		return (true);
	}

}
?>