<?php

header("Access-Control-Allow-Origin: https://editor.swagger.io");
if(isset($_POST['funcao'])) {
	$funcao = $_POST['funcao'];
	switch($funcao) {
		case 'Cadastrar':
			include 'cadastro.html';
			break;
		case 'Listar':
			include 'lista.php';
			break;
		case 'Buscar':
			include 'busca.html';
			break;
	}
}
?>