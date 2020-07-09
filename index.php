<?php

require 'admin/config.php';
require 'functions.php';
try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
 	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$statement = $conexion->prepare('SELECT * FROM articulos');

	$statement->execute();
	$resultados = $statement->fetchAll();
	

} catch (PDOException $e) {
	echo 'ERROR:' . $e->getMessage();
		

	header('Location: error.php');
	die('Problemas con la conexion');
}

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
if(!$posts){
	header('Location: error.php');
}

require 'views/index.view.php';

?>	