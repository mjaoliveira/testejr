<?php
require 'config.class.php';
$Controller = new Controller();

if(!empty($_POST['id'])){
	$id      = $_POST['id'];
	$cliente = $_POST['cliente'];
	$data    = $_POST['data'];
	$produto = $_POST['produto'];
	$status  = $_POST['status'];

	$Controller->editar($id, $cliente, $data, $produto, $status);

	
	header("Location: index.php");
}