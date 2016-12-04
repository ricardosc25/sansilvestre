<br clear="all"><br clear="all">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function confirma(){
	if (confirm("¿Realmente deseas modificar los datos del participantes")){
		alert("El registro ha sido modificado") }
		else { 
		return false
	}
}
</script>
</head>
<body>
<div class="main container">
	<h1><div class="block-title"><span class="deco"></span><span class="text">Mantenimiento de Participantes</span></div></h1>
	<form id="form" name="form" action="<?= base_url()?>participantes/editar_usuario/<?=$num_ident_part?>" method="POST">
	<label for="nombres">Nombres</label>
	<input type="text" size="20" name="nombres" id="nombres" value="<?=$nombres?>">
	<br>
	<label for="apellidos">Apellidos</label>
	<input type="text" size="20" name="apellidos" id="apellidos" value="<?=$apellidos?>">
	<p><input type="submit" name="editar" id="editar" value="Editar Registro"/ onclick="if(confirma() == false) return false" href="<?=base_url()?>participantes/editar_usuario/<?=$num_ident_part?>"></p>

</div>
</form>
</div>
</body>