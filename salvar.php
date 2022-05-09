<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$filename='resposta.txt';
$resposta=$_POST['resposta'];
$str=file_get_contents($filename);
if(!is_numeric($str) and $resposta){
	if(file_put_contents('resposta.txt',time())){
		header('Location: index.php');
	}else{
		print 'erro de escrita';
	}
}else{
	print 'erro 404';
}
?>
