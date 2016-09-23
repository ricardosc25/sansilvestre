<br clear="all">
<div class="main container">
<div class="row">
	<div class="col-lg-6">
	<h1><div class="block-title"><span class="deco"></span><span class="text">Consultar inscripción</span></div></h1>
	<?php $this->load->view('plantillas/menu_registro'); ?><br clear="all"><br clear="all">	
	<form id="buscar" action="<?= base_url()?>participantes/consultaPosicion" method="GET">
		<div class="row">
			<div class="col-md-4">
				<input type="text" class= "form-control" name="query" id="query" placeholder="Digite Cédula" />
			</div>
			<div class="col-md-2">
				<input type="submit" class="btn btn-primary" id="buscar" value="buscar"/>
			</div>
		</div>
	</form><br>

	<table class='table table-striped table-bordered'>
				<thead>
					<tr>
				 		<th>Nombres</th>
				 		<th>Apellidos</th>
				 		<th><center>Editar</center></th>
				 		<th><center>Eliminar</center></th>
					</tr>
				 </thead>
				<tbody>

	<?php 
					if ($result != FALSE){
						foreach ($result->result() as $row){
							echo "<tr>";
								echo "<td>".$row->nom_part.' '."</td>";
								echo "<td>".$row->ape_part."</td>";
								echo "<td><a href=".base_url()."participantes/editar/".$row->ced_part."><center><i class='fa fa-pencil-square-o'></i></center></a></td>";
								echo "<td><a href=".base_url()."participantes/eliminar/".$row->ced_part."><center><i class='fa fa-trash-o'></i></center></a></td>";
								echo "</tr>";
						}	
					}				
	?>
	</tbody>
	</table>
	</div>
</div>
</div>