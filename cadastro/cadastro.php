<!DOCTYPE html>
	<html>
		<head>
			<title>Cadastrar Administrador</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../css/cadastrostyle.css">
			<link rel="stylesheet" type="text/css" href="../css/reset.css">
			<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../js/jquery.mask.js"></script>
			<script type="text/javascript" src="../js/jquery-func.js"></script>
			<?php require('../validacoes/v_cadastro.php');?>
		</head>
			<body>
				<section class="cad-container">
					<h1 class="cad-title">Cadastrar Usuário</h1>
							<form method="POST">
								<?php echo $erro_nivel;?>
								<div class="tipo-users">
									<h3>Nivel de usuário:</h3>
										<select name="Nivel" required="required">
											<option value="vazio">Selecione...</option>
											<option value="cliente">Cliente</option>
											<option value="admin">Administrador</option>
											<option value="moderador">Moderador</option>	
										</select>
											<div class="clear"></div>
								</div>
									<br>
									<?php echo $erro_nome;?>
									<input class="input-style nome" type="text" name="Nome" placeholder="Nome Completo" required="required"/>
									<?php echo $erro_data;?>
									<input class="input-style data" type="text" name="Datanasc" placeholder="Data Nascimento" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1920-01-01" max="2099-01-01"/>
									<?php echo $erro_login;?>
									<input class="input-style login"  type="text" name="Login" placeholder="Login" equired="required"/>
								<div class="form-input-container">
									<?php echo $erro_senha;?>
									<input class="input-style pass" type="password" name="Senha" placeholder="Senha" required="required"/>
									<input class="input-style pass" type="password" name="Confsenha" placeholder="Confirme a senha" required="required"/>
									<br>
								</div>
								<div class="form-input-container">
									<input class="input-style cad" type="submit" name="Cadastrar" value="Cadastrar"/>
									<input class="input-style res" type="reset" value="Limpar"/>
								</div>
							</form>
								<div class="clear"></div>
				</section>

			</body>
	</html>