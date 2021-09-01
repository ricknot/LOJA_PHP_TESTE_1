<?php

	function Conect_BD() {

		$localhost = 'localhost';
		$user = 'root';
		$pass = '';
		$bdName = 'loja_PHP';


			$cn = mysqli_connect($localhost, $user, $pass, $bdName);

				if (mysqli_connect_errno($cn)) {
  					
  						echo mysqli_connect_error($cn);
  							die('Erro ao conectar');
 				}
	}
?>	