<?php 

function DataHora() {

	date_default_timezone_set('America/Sao_Paulo');
	$date = date('d-m-Y H:i');

	return $date;

}
function Conect_BD() {

		$localhost = 'localhost';
		$user = 'root';
		$pass = '';
		$bdName = 'crud_bd';


			$cn = mysqli_connect($localhost, $user, $pass, $bdName);

				if (mysqli_connect_errno($cn))
				{
  					echo mysqli_connect_error($cn);
  					die('Erro ao conectar');
 				}
 				else
 				{
 					return $cn;
 				}
}
function totalUsers() {

	$consulta = "SELECT * FROM users";
		$result = mysqli_query(Conect_BD(), $consulta);
			$total = mysqli_num_rows($result);		
			
				echo $total;
}
function listUsers() {

	$consulta = "SELECT * FROM users ORDER BY data_criado DESC";
		$result = mysqli_query(Conect_BD(), $consulta);
		
			while($list = mysqli_fetch_assoc ($result)) {

					echo "
						<tr>
							<td>".$list['user_ID']."</td>
							<td>".$list['nome']."</td>
							<td>".$list['datanasc']."</td>
							<td>".$list['login']."</td>
							<td>".$list['nivel']."</td>
							<td>".$list['data_criado']."</td>
							<td>".$list['data_modific']."</td>
							<td>
								<a href=''><img class='img-edit' title='Editar' src='../../img/icon/editaruser.png'></a>
								<a href=''><img class='img-edit' title='Excluir' src='../../img/icon/delete.png'></a>
							</td>
						</tr>";				
			}
}


