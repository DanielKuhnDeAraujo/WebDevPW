<?php require_once 'config.php';  require_once DBAPI; 


try{
	$db = open_database(); 
	echo '<h1>Banco de Dados Conectado!</h1>';
}catch(Exception $e){
	echo "<h1>Aconteceu um erro:<br> {$e->getMessage()} </h1>";
}

?>