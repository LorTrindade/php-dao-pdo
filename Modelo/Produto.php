<?php

	class Produto{
		private $id;
		private $nome;
		private $preco;

		public function __construct($params = []){
			foreach($params as $key => $value){
				$this->$key = $value;
			}
		}

		public function __get($key){
			return $this->$key;
		}

		public function __set($key, $val){
			$this->$key = $val;
		}
	}

?>