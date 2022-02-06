<?php 
	
	session_start();
	
	$_titulo = str_replace('#', '-', $_POST['titulo']);
	$_categoria = str_replace('#', '-', $_POST['categoria']);
	$_descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#' . $_titulo . '#' . $_categoria . '#' . $_descricao . PHP_EOL;

	$arquivo = fopen('../../../app_help_desk/arquivo.hd', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	//echo $texto;

	header('location: abrir_chamado.php');

?>