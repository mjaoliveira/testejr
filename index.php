<?php
require 'config.class.php';

$Controller = new Controller();

?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<h1><center>Clientes</h1>

<center><a type="button" class="btn btn-primary" href="adicionar.php">ADICIONAR NOVO CLIENTE</a></center><br/><br/>

<center>
<table class="table table-bordered"style="width: 800px">
	<tr>
		<th>CLIENTE</th>
		<th>DATA NASC</th>
		<th>PRODUTO</th>
		<th>STATUS</th>
		<th><center>-</th>
	</tr>
	

	<?php
	$lista = $Controller->getAll();
	foreach ($lista as $item):
	?>
	<tr>
		<td><?php echo $item['NOME'];?></td>
		<td><?php echo $item['DATA_NASCIMENTO'];?></td>
		<td><?php echo $item['DESCRICAO'];?></td>
		<td><?php echo $item['STAUS'];?></td>
		<td>
			<a type="button" class="btn btn-primary" href="editar.php?id=<?php echo $item['ID']; ?>">EDITAR</a>
			<a type="button" class="btn btn-danger" href="excluir.php?id=<?php echo $item['ID']; ?>" onclick="return confirm('Tem certeza que deseja deletar esse registro?');">EXCLUIR</a>
		</td>
		
	</tr>
<?php endforeach; ?>
</table>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

