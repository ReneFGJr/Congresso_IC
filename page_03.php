<?
switch ($LANG)
	{
	default:
		$bt_submit = 'Submeter trabalho >>>';
		$texto  = '<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare odio nibh, vitae commodo mi semper quis. Integer aliquet ornare vestibulum. Maecenas quis dui odio. Nam et dignissim arcu, et ornare elit. Suspendisse orci massa, dictum at dapibus ac, aliquam sed quam. Morbi rhoncus libero hendrerit est tempus, id tempor lacus convallis. Quisque massa tellus, sollicitudin vitae mattis in, mollis vitae est. Praesent ipsum nulla, rutrum sit amet commodo eget, volutpat iaculis sapien. Praesent laoreet porta ligula eget laoreet. Phasellus venenatis neque sit amet turpis pharetra, ultricies sollicitudin felis tincidunt. Donec semper volutpat nulla non vestibulum. Suspendisse imperdiet gravida faucibus. Phasellus nulla arcu, lobortis at metus ac, pulvinar dictum orci.</P>';
		$texto .= '<P>Integer lobortis nunc sed tortor scelerisque, sit amet tempor risus ultrices. Quisque venenatis, est pretium suscipit posuere, mi risus dignissim sapien, sit amet ultrices tellus magna sed quam. Etiam porta iaculis dolor, vel cursus mauris sodales sed. Sed tincidunt nisi vel dictum eleifend. Morbi eu enim posuere, sagittis odio congue, volutpat odio. Fusce sagittis tellus sed odio ultrices lobortis. Sed ultricies laoreet bibendum. Nunc magna tortor, posuere vel laoreet sed, vulputate vitae felis. Cras lobortis semper risus a ultrices. Cras a aliquet lectus. Aliquam erat volutpat. Nullam vulputate blandit feugiat. Sed mollis mi sit amet ipsum tempor adipiscing. Phasellus imperdiet tortor orci, vel eleifend arcu placerat non.</P>';
		break;
	}
$tela = '';
$tela .= '<h1>Submissão de Trabalhos</h1>';
$tela .= '<div class="colunas">';
$tela .= $texto;
$tela .= '</div>';
$tela .= '<form method="get" action="page_submit.php">';
$tela .= '<input type="submit" value="'.$bt_submit.'" class="bt_submit">';
$tela .= '</form>';
?>
<style>
	.colunas
	{
  		columns: 2;
  		-webkit-columns: 2;
  		-moz-columns: 2;		
	}
	.cc2 {
		font-family: Tahoma, Arial, Verdana;
		font-size: 20px;
		color: #2D332D;
		text-align: center;
	}
	.bt_submit
		{
			width: 250px;
			height: 50px;
			background-color: #8B1217;
			color: #E0EFE0;
			font-size: 20px;
		}
	.pg03 { background-color: #EFFFEF; }
</style>

<div id="page03" class="page_min pg03">
	
	<table width="98%" cellpadding=0 cellspacing=0 align="center" border=0 style="min-height:800px;">
		<TR valign="top">
			<TD><?php echo $tela; ?></TD>
			<TD align="right"><img src="img/logo.png" height="150"></TD>
		</TR>
	</table>
</div>
