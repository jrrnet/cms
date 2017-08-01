<h1>Adicionar Página</h1>

<form method="POST">
	Titulo da Pagina:<br>
	<input type="text" name="titulo" /><br><br>

	URL da Página:<br>
	<input type="text" name="url" /><br><br>

	Criar Menu Automático:<br>
	<input type="checkbox" name="add_menu" value="Sim" /><br><br>


	Corpo da Página:<br>
	<textarea name="corpo" id="corpo"></textarea><br><br>
	<input type="submit" value="Salvar"/>
</form>
<script type="text/javascript" src="<?php echo BASE; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function() {
		CKEDITOR.replace("corpo");
	}
</script>