<?php

	if (isset($_POST['Cadastrar'])) {

		$nivel = $_POST['Nivel'];
		$nome = $_POST['Nome'];
		$datanasc = $_POST['Datanasc'];
		$login = $_POST['Login'];
		$senha = $_POST['Senha'];
		$confsenha = $_POST['Confsenha'];

			if ($_POST) {
				$erro_nivel = '';
				$erro_nome = '';
				$erro_data = '';
				$erro_login = '';
				$erro_senha = '';
			} #VARIAVEIS DE ERRO

########################### Validando Campos Form
			#Tipo de User 
				if ($nivel == 'vazio') 
				{
					$erro_nivel = 'Escolha o nivel de usuário';
				}
			
			#Campo Nome
				
				if (empty($nome))
				{
					$erro_nome = 'Campo Vazio';
				}
				elseif (strlen($nome) < 2) 
				{
					$erro_nome = 'Preencha com no mínimo 2 caracteres.';
				}
				elseif (!preg_match("/^[a-zA-Z-ç-À-Úà-ú\s]+$/i", $nome)) 
				{
					$erro_nome = 'Nome deve conter apenas letras.';
				}

			#Campo Data Nasc.

				if (empty($datanasc)) 
				{
					$erro_data = 'Campo Vazio';
				}
				elseif (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $datanasc)) 
				{
					$erro_data = 'Data Inválida !';
				}

			#Campo Login & Senha


				if (empty($login)) 
				{
					$erro_login = 'Campo Vazio';
				}
				elseif (strlen($login) < 5) 
				{
					$erro_login = 'Preencha com no mínimo 5 caracteres.';
				}
				elseif (strstr($login, " ")) 
				{
					$erro_login = 'Login não pode ter espaços em branco.';
				}

				if (empty($senha) || empty($confsenha)) 
				{
					$erro_senha = 'Campo Vazio.';
				}
				elseif (strlen($senha) < 8) 
				{
					$erro_senha = 'Preencha com no mínimo 8 caracteres.';
				}
				if ($senha == $confsenha) 
				{
					$safesenha= md5($senha);
				}
				else {$erro_senha = 'As senhas não combinam';}
	} #ISSET CADASTRAR

		if (empty($erro_nivel) && empty($erro_nome) && empty($erro_data) &&
			empty($erro_login) && empty($erro_senha) && isset($_POST['Cadastrar']))
		{

		#IF NENHUM ERRO
			require("../func/functions.php");
			

			$inserir = "INSERT INTO users 
			(nome, datanasc, login, senha, nivel, data_criado, data_modific) VALUES 
			('$nome','$datanasc','$login','$safesenha','$nivel','".DataHora()."',
			'".DataHora()."');";

					$result = mysqli_query(Conect_BD(), $inserir);
				
				if ($result == TRUE)
				{
					echo "
							<div class='msg verde'>Cadastrado com sucesso</div>
							<meta HTTP-EQUIV='refresh' CONTENT='1;URL=../dashboard/pages/dashboard.php'>";
				}
					
				else {
					echo "
							<script>alert('Erro: Não Cadastrado !');</script>
							<meta HTTP-EQUIV='refresh' CONTENT='3;URL=../dashboard/admin.php'>;";
		}
	} # FIM - IF NENHUM ERRO
		else 
		{ 
			#Mostra erros

			$erro_nivel=empty($erro_nivel)?'' : '<div class ="mostra-erro">'.$erro_nivel.'</div>';
			$erro_nome=empty($erro_nome)?'' : '<div class ="mostra-erro">'.$erro_nome.'</div>';
			$erro_data=empty($erro_data)?'' : '<div class ="mostra-erro">'.$erro_data.'</div>';
			$erro_login=empty($erro_login)?'' : '<div class ="mostra-erro">'.$erro_login.'</div>';
			$erro_senha=empty($erro_senha)?'' : '<div class ="mostra-erro">'.$erro_senha.'</div>';
		}
?>