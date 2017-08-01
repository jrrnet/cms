<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>/assets/css/painel.css" />   
</head>
<body>
	<div class="menu">
		<ul>
			<li><a href="<?php echo BASE; ?>painel">Páginas</a></li>
			<li><a href="<?php echo BASE; ?>painel/menus">Menus</a></li>
			<li><a href="<?php echo BASE; ?>painel/config">Configurações</a></li>
			<li><a href="<?php echo BASE; ?>painel/logout">Sair</a></li>
		</ul>
	</div>
	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
</body>
</html>