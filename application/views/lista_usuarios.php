<br clear="all">
<div class="main container">
	<div class="row">
	<div class="col-lg-6">
	<h1><div class="block-title"><span class="deco"></span><span class="text">Administración de usuarios Paginación</span></div></h1>
		<table class="table table-striped">
    <?php
    if($participantes)
    {
    ?>
        <tr>
            <th>
                Participante
            </th>
        </tr>
        <?php
        foreach ($participantes as $participante)
        {
        ?>
            <tr>
                <td>
                    <?php echo $participante->participante ?>
                </td>
            </tr>
        <?php
        }
        ?>
    <?php
    }
    ?>
    </table>
    <?php echo $this->pagination->create_links() ?>
	</div>
	</div>
</div>