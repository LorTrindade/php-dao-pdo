<?php

	class PDOFactory{
		public function build(){
			return new PDO('mysql:dbname=mvc;host=localhost', 'root', '');
		}
	}

?>