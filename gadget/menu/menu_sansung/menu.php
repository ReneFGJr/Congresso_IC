<link rel="stylesheet" href="css/cicpg_normal.css">
<link rel="stylesheet" href="css/component.css">
<?
/*
 * @Author Rene Faustino Gabriel Junior <renefgj@gmail.com>
 * @date 09/jan./2015
 */
class menu_sansung {
	var $menu = array();
	
	var $color_bk = '#000000';
	var $color_bd = '#303050';
	
	var $color_ft = '#E0E0E0';
	
	var $border_size = 5;
	var $width = '400';

	function add_item($name = '', $link = '', $type = '', $img = '', $color = '') {
		$m = $this -> menu;

		array_push($m, array($name, $link, $type, $img));
		$this -> menu = $m;

		return (1);
	}
	
	function cores()
		{
			$sx = '
			<style>
			.grid li {
				width: '.$this->width.'px;
			}
			.grid li h3 
				{
					background: '.$this->color_bd.';
					color: '.$this->color_ft.';
					font-family: "CICPG",Arial, Verdana, Tahoma;
				}
			.title-box h2 {
					background: '.$this->color_bd.';
					color: '.$this->color_bk.';
				}
			
			.title-box h2 a:hover { color: '.$this->color_bd.'; }
			/* Bordas */
			.grid li.shown:hover > a::before 
					{
					border-width: '.$this->border_size.'px;
					border-color: '.$this->color_bd.';
					}

			.grid li > a::before
					{
						width: 100%;
					}
			</style>
			';
			return($sx);
		}

	function show_menu() {
		$m = $this -> menu;
		$sx = '';
		$cr = chr(10) . chr(13);
		for ($r = 0; $r < count($m); $r++) {
			$mn = $m[$r];
			$name = $mn[0];
			$type = trim($mn[2][0]);
			$image = 'img/' . $mn[3];
			$link = $mn[1];
			$lk = 0;
			if (strlen(trim($mn[1])) > 0) { $lk = 1;
			}

			switch ($type) {
				case 'F' :
					$sx .= '<li class="title-box">' . $cr;
					$sx .= '<h2>' . $m[$r][0] . '</h2>';
					$sx .= '</li>'.$cr;
					break;
				case 'L' :
					$sx .= '<li>';
					if ($lk == 1) { $sx .= '<a href="' . $link . '">';
					}
					if (strlen($image) > 4)
						{
							$sx .= '<img src="' . $image . '" alt="dummy" alt="' . $name . '">';
						} else {
							$sx .= '<div class="content-box" style="padding: 5px; border: 1px solid '.$this->color_bk.'">';
							$sx .= 'o wiu eoiuwe oicuou woiwueioc wuoecu ';
							$sx .= '<BR><BR><BR><BR><BR><BR><BR>';
							$sx .= '</div>';
						}
						$sx .= '<h3>' . $name . '</h3>';
						
					if ($lk == 1) { $sx .= '</a>';
					}
					$sx .= '</li>'.$cr;
					break;
				default :
					echo 'Type not found: ' . $type;
					break;
			}
		}
		$sa .= $this->cores();
		$sa .= chr(13).chr(10);
		$sa .= '<section class="grid-wrap"><ul class="grid swipe-right" id="grid">';
		$sa .= $sx;
		$sa .= '</ul></section>'.$cr;
		
		$sa .= '<script>
					new GridScrollFx( document.getElementById( \'grid\' ), {
					viewportFactor : 0.4
					} );
				</script>';	
		return ($sa);
	}

}

$m = new menu_sansung;
for ($r = 0; $r < 10; $r++) {
	$m -> add_item('Samsung Menu', '', 'FIX', '');
	$m -> add_item('O tamanho da amostra e relativo ao da imagem', 'index.php', 'LINK', 'menu_teste_00.jpg');
	$m -> add_item('Sample', 'index.php', 'LINK', 'menu_teste_01.jpg');
	$m -> add_item('Sample', 'index.php', 'LINK', 'menu_teste_02.jpg');
	$m -> add_item('Sample', 'index.php', 'LINK', 'menu_teste_03.jpg');
	$m -> add_item('Sample', 'index.php', 'LINK', 'menu_teste_04.jpg');
	$m -> add_item('Sample', 'index.php', 'LINK', 'menu_teste_05.jpg');
	$m -> add_item('Sample', 'index.php', 'LINK', 'menu_teste_06.jpg');
	$m -> add_item('Sample 33 44 5 5 #ID:098', 'index.php', 'LINK', '');
}

$cr = chr(10) . chr(13);
echo '<script src="js/jquery.js"></script>' . $cr;
echo '<script src="js/less.min.js"></script>' . $cr;
echo '<script src="js/modernizr.custom.js"></script>' . $cr;
echo '<script src="js/masonry.pkgd.min.js"></script>' . $cr;
echo '<script src="js/imagesloaded.pkgd.min.js"></script>' . $cr;
echo '<script src="js/classie.js"></script>' . $cr;
echo '<script src="js/colorfinder-1.1.js"></script>'.$cr;
echo '<script src="js/gridScrollFx.js"></script>' . $cr;

/* CSS */
echo '<link rel="stylesheet" type="text/css" href="css/sansung_menu.css" />' . chr(13);

echo $m -> show_menu();

/* xxx */
echo '

';
?>