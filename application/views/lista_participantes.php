<br clear="all">
<div class="main container" id="lista_participantes">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1><div class="block-title"><span class="deco"></span><span class="text">Listado de participantes</span></div></h1>
  <span class="label label-default">Total usuarios registrados <span class="badge"><?php echo $contadorRegistros ?></span></span>
  <button type="button" class="btn btn-secondary"><a href="<?= base_url()?>participantes/dowloadExcel">Descargar a Excel</a></button>
<br clear="all"><br clear="all">
	<div class="table-responsive">
      <table class='table table-striped table-bordered'>
				<thead>
					<tr>
				 		<th>Nombres</th>
				 		<th>Apellidos</th>
				 		<th>Pais</th>
				 		<th>Ciudad</th>
				 		<th>Celular</th>
				 		<th>Correo</th>
				 		<th>Categoría</th>
				 		<th>Kilometros</th>
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
              <td><?=$fila->nom_categoria?></td>
              <td><?=$fila->kilometros?></td>
            </tr>
            <?php
          }
          ?>

          <?php } else{
          //Imprimimos mensaje si no encuentra se encuentran registros en la DB.
            echo "<div class='alert alert-warning'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            <strong> No existe información en la base de datos </strong>
          </div>";}
          ?>
      </table>

     </div>
      <?php echo $this->pagination->create_links() ?>
      <br>
	</div>

	</div>
</div>