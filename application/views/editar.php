<br clear="all"><br clear="all"><br clear="all">
<div class="main container">
	<h1>EDITAR</h1>
	<?php $this->load->view('plantillas/menu_registro'); ?><br clear="all"><br clear="all">
	<form id="form" name="form" action="<?= base_url()?>participantes/editar_usuario/<?=$ced_part?>" method="POST">
	<label for="nombres">Nombres</label>
	<input type="text" size="20" name="nombres" id="nombres" value="<?=$nombres?>">
	<br>
	<label for="apellidos">Apellidos</label>
	<input type="text" size="20" name="apellidos" id="apellidos" value="<?=$apellidos?>">

	<p><input type="submit" name="editar" id="editar" value="Editar Registro"/></p>	
</div>