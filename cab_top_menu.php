<?
$menui = array();
switch ($LANG)
	{
	case 'en':
		break;
	default:
		array_push($menui,'Menu Principal');
		array_push($menui,'Apresenta��o');
		array_push($menui,'Submiss�o de trabalhos');
		break;
	}
?>
<nav id="menu">
	<div id="hamburger-helper">
		<div>
			<div id="ham1" class="barra"></div>
			<div id="ham2" class="barra"></div>
			<div id="ham3" class="barra"></div>
		</div>
	</div>
	<ul>
		<li>
			&nbsp;
		</li>
		<li>

		</li>
		<li><IMG SRC="img/icone_16.png" height="28">
		</li>
		<li>
			<a href="index.php#page00">INICIAL</a>
		<li>
			<a href="index.php#page01">MENU</a>
		<li>
			<a href="index.php#page02">FAQ</a>
	</ul>
	<div id="menus" class="menu_left menu_lateral">
	    	<div class="mobile-menu">
	    		<UL>
	    		<LI><a href="index.php#page01" class="y-out">Menu Principal</a></LI>
	    		<LI><a href="index.php#page02" class="y-out">Apresenta��o</a></LI>
	    		<LI><a href="index.php#page03" class="y-out"><?php echo $menui[2];?></a></LI>
	    		<LI><a href="index.php#page04" class="y-out">Instru��es para Autores</a></LI>
	    		<LI><a href="index.php#page05" class="y-out">Datas Importantes</a></LI>
	    		<LI><a href="index.php#page06" class="y-out">Contato / Contact</a></LI>
	    		<LI><a href="index.php#page03" class="y-out">Comiss�o Organizadora</a></LI>
	    		</UL>
	    	</div>
	</div>	
</nav>



<script>
	$("#hamburger-helper").click(function() {
		$("#ham1").toggleClass('barra_first');
		$("#ham2").toggleClass('barra_middle');
		$("#ham3").toggleClass('barra_last');
		$("#ham3").animate('barra_last');
		$("#menus").animate({
			opacity : 1,
			top : "50",
			height : "toggle"
		}, 500, function() {/* Animation complete. */
		});
	});

</script>