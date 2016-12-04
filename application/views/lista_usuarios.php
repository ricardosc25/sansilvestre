<br clear="all">
<div class="main container">
	<div class="row">
	<div class="col-lg-6">
	<h1><div class="block-title"><span class="deco"></span><span class="text">Administración de usuarios</span></div></h1>
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
		if ($registros != FALSE) {
			foreach ($registros->result() as $row) {
			echo "<tr>";
                  echo "<td>".$row->nom_part."</td>";
                  echo "<td>".$row->ape_part."</td>";
                  echo "<td><a href=".base_url()."participantes/editar/".$row->num_ident_part."><center><i class='fa fa-edit'></i></center></a></td>";
                  echo "<td><a href=".base_url()."participantes/eliminar/".$row->num_ident_part."><center><i class='fa fa-trash'></i></center></a></td>";
            echo "</tr>";
        }
		}else{

			echo "<div class='alert alert-warning'>
              		<button type='button' class='close' data-dismiss='alert'>×</button>
              		<strong>No existen registros para esta consulta!</strong>
            	</div>";
		}
	?>
				</tbody>
	</table>
	</div>
	</div>
</div>