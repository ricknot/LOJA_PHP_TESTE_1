<!DOCTYPE html>
	<html>
		<head>
			<title>Admin:</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
			<link rel="stylesheet" type="text/css" href="../css/reset.css">
			<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../js/jquery-func.js"></script>
		</head>
			<body>
				<div class="pg-Container">
					<header class="header-Container">
						<h1 class="header-title">Painel Admin</h1>
<!-- 					<h3 class="header-Stitle">Olá, Admin.</h3> -->
						<a class="logoutbutn" href="">Sair</a>
						<div class="clear"></div>
					</header>
						<aside class="nav-menu-left">
							<div class="navmenu-title">Menu &equiv;</div>
								<div class="showMenu">
									<h3 class="menucateg-title">Preferências</h3>
											<ul>
												<li class="smenu"><a href="admin.php">Dashboard</a></li>
												<li class="smenu"><a href="">Perfil</a></li>
												<li class="smenu"><a href="">Mudar Senha</a></li>
											</ul>
									<h3 class="menucateg-title">Contas</h3>
											<ul>
												<li class="smenu"><a href="">Administradores</a></li>
												<li class="smenu"><a href="">Moderadores</a></li>
												<li class="smenu"><a href="">Clientes</a></li>
												<li class="smenu"><a href="../cadastro/cadastro.php" target="CadFrame">Criar Usuário</a></li>
											</ul>
								</div>
									<div class="clear"></div>
						</aside>
							<iframe frameborder="0" marginheight="1" marginwidth="1" class="Fprincipal" src="pages/dashboard.php" name="CadFrame">
								
							</iframe>
				</div>
			</body>
	</html>