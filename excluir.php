<?php
require 'config.class.php';
$Controller = new Controller();

if(!empty($_GET['id'])){
	$id = $_GET['id'];

	$Controller->excluirPeloId($id);

	header("Location: index.php");

} 
	header("Location: index.php");
