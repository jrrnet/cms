<div class="home_banner" style="background-image: url('<?php echo BASE.'assets/img/'.$this->config['home_banner']; ?>')"></div>

<div class="home_banner_txt"><?php echo $this->config['home_welcome']; ?></div>

<div class="home_depo">
	<h3>Depoimentos de Clientes</h3>
	<?php foreach($depoimentos as $dpmitem): ?>
		<strong><?php echo utf8_encode($dpmitem['nome']); ?></strong><br/>
		<?php echo utf8_encode($dpmitem['texto']); ?>
		<hr/>
	<?php endforeach; ?>
</div>

<div class="home_cta">
	Deseja conferir nossos serviços?<br/>
	<a href="<?php echo BASE.'servicos';?>"><div>Conferir Nossos Serviços</div></a>

</div>