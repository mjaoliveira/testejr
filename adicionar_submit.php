<?php
require 'config.class.php';
$Controller = new Controller();

if(!empty($_POST['cliente'])){
	$cliente = $_POST['cliente'];
	$data    = $_POST['data'];
	$produto = $_POST['produto'];
	$status  = $_POST['status'];

	$Controller->adicionar($cliente, $data,$produto,$status);

	header("Location: index.php");
}