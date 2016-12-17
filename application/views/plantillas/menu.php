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
					<a class="navbar-brand">
						<div class="media">
							<a href="#" class="pull-left">
							<img src="<?php echo base_url();?>images/logo_brand.png"" class="media-object" alt="La carrera">
							</a>
							<div class="media-body">
								<h4 class="media-heading texto_blanco">"El deporte une al mundo y hace la paz".</h4>
							</div>
						</div>
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"> Home</i><span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-road"> La Carrera</i><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>participantes/registrar">Inscripción</a></li>
								<li><a href="<?php echo base_url();?>lacarrera/categorias">Categorías</a></li>
								<li><a href="<?php echo base_url();?>lacarrera/recorridos">Recorridos</a></li>
								<li><a href="<?php echo base_url();?>lacarrera/historia">Historia</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>lacarrera/nosotros"><i class="fa fa-users aria-hidden="true"" aria-hidden="true"> Nosotros</i></a></li>
						<li><a href="<?php echo base_url();?>lacarrera/contacto"><i class="fa fa-phone"> Contacto</i></a></li>
					</ul>
					<!-- Link Admin -->
						 <!-- <ul class="nav navbar-nav navbar-right">
					      	<li><a href="<?php echo base_url();?>auth/login"><i class="icon-user"> Admin</i></a></li>
					      </ul> -->
					  </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

				<div class="container-fluid">
					<div class="social" id="social">
						<ul>
							<li><a href="https://www.facebook.com/profile.php" class="icon-facebook"></a></li>
							<li><a href="https://twitter.com/" class="icon-twitter"></a></li>
							<li><a href="https://www.youtube.com/user/" class="icon-youtube"></a></li>
						</ul>		
					</div>
				</div>