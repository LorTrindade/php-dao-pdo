<?php

require_once 'PDOFactory.php';
require_once 'modelo/Produto.php';
require_once 'Dao/ProdutoDAO.php';

	$prod = (new ProdutoDAO)->select();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
 		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	</head>
 		<title>Compre Online</title>
</html>
<body>

	<div class="container">
		<h1>Cadastrar</h1>
		<form class="form-inline" action="cadastrar.php" method="post">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" class="form-control" name="nome" required>
			</div>
			<div class="form-group">
				<label>Preço:</label>
				<input type="number" class="form-control" name="preco" required>
			</div>
			<div class="form-group">
				<button type="submit" name="button" class="btn btn-primary">
					Cadastrar
				</button>
			</div>
		</form>

		<h1>Lista de produtos</h1>
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Nome</th>
				<th>Preço</th>
			</thead>
			<tbody>
				<?php foreach($prod as $produto): ?>
					<tr>
						<td><?= $produto->id ?></td>
						<td><?= $produto->nome ?></td>
						<td><?= $produto->preco ?></td>
					</tr>
				<?php endforeach ?>	
			</tbody>
		</table>
	</div>
</body>