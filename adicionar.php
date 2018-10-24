<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<h1><center>Cadastrar</h1>

<center>
<form method="POST" action="adicionar_submit.php"  >
	<div class="form-group">
		<label for="">Cliente:</label>
		<input type='text' name="cliente" required="" class="form-control"style="width: 300px"/>
	</div>

	<div class="form-group">
		<label for="">Data Nasc:</label>
		<input placeholder="Ex:'1992-02-02'" type="text" name="data" required="" class="form-control"style="width: 300px" maxlength="10"   />
	</div>
	
	<div class="form-group">
		<label for="">Código do Produto: </label>
		<input type="text" name="produto" required="" class="form-control"style="width: 300px"/>
		<small id="emailHelp" class="form-text text-muted">(1 = PRODUTO1, 2 = PRODUTO2, 3 = PRODUTO3, 4 = PRODUTO4, 5 = PRODUTO5)</small>
	</div>
	
	<div class="form-group">
		<label for="">Código do Status:</label>
		<input type="text" name="status" value="1" required="" class="form-control"style="width: 300px" />
		<small id="emailHelp" class="form-text text-muted">(Podendo ser apenas: 1)</small>
	</div>
	
	<input class="btn btn-primary" type="submit" value="Adicionar"/>
	<a class="btn btn-primary" href="index.php">Voltar</a>
	
</form>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

