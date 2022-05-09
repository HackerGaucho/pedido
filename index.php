<?php
$filename='resposta.txt';
$str=file_get_contents($filename);
$str=trim($str);
if(is_numeric($str)){
	$desde=date('r',$str);
	require 'view/resposta.php';
}else{
	require 'view/pedido.php';
}
?>
