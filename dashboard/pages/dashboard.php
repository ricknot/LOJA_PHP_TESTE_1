<!DOCTYPE html>
	<html>
		<head>
			<title>Admin:</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../../css/adminstyle.css">
			<link rel="stylesheet" type="text/css" href="../../css/reset.css">
			<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../js/jquery-func.js"></script>
			<?php require('../../func/functions.php');?>

		</head>
			<body>
				<section class="principal-Container">
					<h1 class="princ-title">Dashboard</h1>
						<div class="menu-painel-container">
							<div class="cpainel client">
								<h1 href="" class="cpanieltitle">Total Usuários</h1>
								<span href="" class="cpanieltitle total"><?php totalUsers();?></span>
							</div>
							<div class="cpainel prod">
								<a href="" class="cpanieltitle">Total Produtos</a>
								<a href="" class="cpanieltitle total">0</a>
							</div>
							<div class="cpainel msg">
								<a href="" class="cpanieltitle">Mensagens</a>
								<a href="" class="cpanieltitle total">0</a>
							</div>
								<a href="" class="cpainel config">Configurações</a>
									<div class="clear"></div>
						</div>
				</section>
					<div class="showlist-container">
						<table class="table-list">
							<tr style="background-color: #FFFFFF">
								<th>ID</th>
								<th>Nome</th>
								<th>Data Nasc.</th>
								<th>Login</th>
								<th>Nivel</th>
								<th>Criado</th>
								<th>Modificado</th>
								<th>Ações</th>
							</tr>
								<?php listUsers();?>
						</table>
							<div class="clear"></div>
					</div>