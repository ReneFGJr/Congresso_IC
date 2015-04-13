<?php
$page_active = 1;
require ("../../cab.php");
require($include.'sisdoc_debug.php');
echo '<link rel="STYLESHEET" type="text/css" href="form_css_01.css">';


require($include.'_class_form.php');
$cp = array();
array_push($cp,array('$H8','','',False,True));
array_push($cp,array('$S80','','Name',False,True));
array_push($cp,array('$T80:5','','Observações',False,True));
array_push($cp,array('$O : &1:SIM&0:NÃO','','Observações',False,True));
array_push($cp,array('$N8','','Valor do Frete',False,True));
array_push($cp,array('$I8','','Itens',False,True));
array_push($cp,array('$C8','','Café da manhã',False,True));
array_push($cp,array('$R20150101:Janeiro<BR>&20150201:Fevereiro<BR>&20150301:Março','','Entrada<BR>',False,True));
array_push($cp,array('$CEP','','CEP',False,True));
array_push($cp,array('$CPF','','CPF',False,True));


$form = new form;

//$form -> required_message = 0;
//$form -> required_message_post = 0;
$form -> class_password = 'form_string';
$form -> class_string = 'form_string';
$form -> class_button_submit = 'form_submit';
$form -> class_form_standard = 'form_table';
$form -> class_select = 'form_select';
$form -> class_select_option = 'form_select_option';
$form -> class_textarea = 'form_textarea';
$form -> class_captcha = 'form_captcha';

$tela = $form->editar($cp,'');
echo $tela;
?>