<h1>Editar Página</h1>

<form method="POST">
	Titulo da Pagina:<br>
	<input type="text" name="titulo" value="<?php echo utf8_encode($pagina['titulo']); ?>"/><br><br>
	URL da Página:<br>
	<input type="text" name="url" value="<?php echo $pagina['url']; ?>"/><br><br>
	Corpo da Página:<br>
	<textarea name="corpo"><?php echo $pagina['corpo']; ?></textarea><br><br>

	<input type="submit" value="Salvar"/>
</form>
<script type="text/javascript" src="<?php echo BASE; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function() {
		CKEDITOR.replace("corpo");
	}
</script>