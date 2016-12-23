<br clear="all">
<div class="main container">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1><div class="block-title"><span class="deco"></span><span class="text">Administración de usuarios Paginación</span></div></h1>
	<div class="table-responsive">
      <table class='table table-striped table-bordered'>
				<thead>
					<tr>
				 		<th>Nombres</th>
				 		<th>Apellidos</th>
				 		<th>Pais</th>
				 		<th>Ciudad</th>
				 		<th>Correo</th>
				 		<th>Celular</th>
				 		<th>Categoría</th>
				 		<th>Kilometros</th>
				 		<th>Fecha de Inscripción</th>
					</tr>
				 </thead>
				<tbody>

          <?php
          if ($parti) {
            foreach ($parti as $fila) {?>
            <tr>
              <td><?=$fila->nom_part?></td>
              <td><?=$fila->ape_part?></td>
              <td><?=$fila->pais_part?></td>
              <td><?=$fila->ciudad_part?></td>
              <td><?=$fila->celu_part?></td>
              <td><?=$fila->email_part?></td>
              <td><?=$fila->categoria?></td>
              <td><?=$fila->kilometros?></td>
              <td><?=$fila->fec_creacion?></td>
            </tr>
            <?php
          }
          ?>

          <?php } else{
          //Imprimimos mensaje si no encuentra se encuentran registros en la DB.
            echo "<div class='alert alert-warning'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            <strong>".$msjNoExistDB."</strong>
          </div>";}
          ?>
      </table>
     </div>
      <?php echo $this->pagination->create_links() ?>
	</div>
	</div>
</div>