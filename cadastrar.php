<?php

require_once 'PDOFactory.php';
require_once 'modelo/Produto.php';
require_once 'Dao/ProdutoDAO.php';

	$dao = new ProdutoDAO;
	$dao->insert(new Produto($_POST));

	header('location: index.php');	

?>