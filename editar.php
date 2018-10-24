<?php
require 'config.class.php';
$Controller = new Controller();


if (!empty($_GET['id'])) {
	$id = $_GET['id'];

	$info = $Controller->getInfo($id);

	if(empty($info['ID'])){
		header("Location: index.php");
		exit;
	}
}else{
	header("Location: index.php");
	exit;
}
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<center>
<h1>Editar</h1>

<form method="POST" action="editar_submit.php">
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $info['ID']; ?>"/>
	</div>

	<div class="form-group">
		<label for="">Cliente:</label>
		<input class="form-control"style="width: 300px" type='text' required="" name="cliente" value="<?php echo $info['NOME']; ?>" />
	</div>

	<div class="form-group">
		<label for="">Data Nasc:</label>
		<input class="form-control"style="width: 300px" type="text" required="" name="data" value="<?php echo $info['DATA_NASCIMENTO']; ?>" /> 
    </div>
	
	<div class="form-group">
    	<label for="">Código do Produto </label>
		<input class="form-control"style="width: 300px" type="text" required="" name="produto" value="<?php echo $info['ID_PRODUTO']; ?>" />
		<small id="emailHelp" class="form-text text-muted">(1 = PRODUTO1, 2 = PRODUTO2, 3 = PRODUTO3, 4 = PRODUTO4, 5 = PRODUTO5)</small>
    </div>

	<div class="form-group">
    	<label for="">Código do Status:</label>
	    <input class="form-control"style="width: 300px" type="text" required="" name="status" value="<?php echo $info['STATUS']; ?>" />    
    	<small id="emailHelp" class="form-text text-muted">(Podendo ser apenas: 1)</small>
	 </div>

	<input  class="btn btn-primary" type="submit" value="Salvar"/>
	<a class="btn btn-primary" href="index.php">Voltar</a>
</form>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

