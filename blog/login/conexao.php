<?php
	define('HOST', '127.0.0.1');
	define('USUARIO', 'root');
	define('SENHA', 'SENHA');
	define('DB', 'login');;

	$conexao = mysqli(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar');

?>