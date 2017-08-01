	 
	<form method="POST">
		<label>E-mail</label><br/>
		<input type="text" name="email"><br/>
		<label>Senha</label><br/>
		<input type="password" name="senha"><br/>
		<input type="submit" value="Entrar"><br/><br/>

		<?php
			if (!empty($erro)) {
				echo $erro;
			}
		 ?>
	</form>