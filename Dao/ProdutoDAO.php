<?php

	class ProdutoDAO{
		private $pdo;

		public function __construct(){
			$this->pdo = (new PDOFactory())->build();
		}

		public function insert(Produto $produtomvc){
        	$stmnt = $this->pdo->prepare('insert into produtomvc(nome, preco) values (:nome, :preco)');
        	$stmnt->execute([
           		':nome' => $produtomvc->nome,
           		':preco' => $produtomvc->preco,
        	]);

    }

		public function select(){
			$stmnt = $this->pdo->prepare('Select * From produtomvc');
			$stmnt->execute();
			$produtomvc = [];

			while($row = $stmnt->fetch(PDO::FETCH_ASSOC)){
				$produtomvc[] = new Produto($row);
			}

			return $produtomvc;
		}
	}

?>