		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand navbar-brand-centered">
						
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"> Inicio</i><span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-road"> La Carrera</i><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>lacarrera/croquis">Mapa de rutas</a></li>
								<li><a href="<?php echo base_url();?>lacarrera/historia">Historia</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>lacarrera/nosotros"><i class="fa fa-users aria-hidden="true"" aria-hidden="true"> Nosotros</i></a></li>
						<li><a href="<?php echo base_url();?>lacarrera/contacto"><i class="fa fa-phone"> Contacto</i></a></li>
						<li><a style="color: yellow;" href="<?php echo base_url();?>participantes/registrar"><i class="fa fa-list-alt"> Inscribite aquí</i></a></li>
					</ul>
					<!-- Link Admin -->
						 <ul class="nav navbar-nav navbar-right">
					      	<li><a href="<?php echo base_url();?>auth/login"><i class="icon-user"> Admin</i></a></li>
					      	<li><?php echo $username; ?></li>
					      	<li><?php echo anchor('/auth/logout/', 'Cerrar Session'); ?></li>
					      </ul>

					  </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				<div class="page-header" id="slogan">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1 class="texto_slogan">
	
								</h1>
							</div>
						</div>
					</div>
				</div>
	