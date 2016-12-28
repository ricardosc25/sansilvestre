<section class="main container">
	Hola, <strong><?php echo $username; ?></strong>! Eres el administrador del sistema. <?php echo anchor('/auth/logout/', 'Cerrar Session'); ?>
<ul class="nav nav-tabs">
	  <li class="active"><a href="<?= base_url()?>participantes/inscritos">Listado de Usuarios</a></li>
	  <li><a href="<?= base_url()?>participantes/editar">Editar</a></li>
</ul>	
</section>
