<br clear="all">
<div class="main container">
  <div class="row">
   <html lang="en">
   <head>
    <meta charset="utf-8">
    <title>$title</title>
    <style type="text/css">
      #msg_ok{
        display: none;
      }
      #msg_no{
        display: none;
      }

    </style>
    <script>
     

    // function guardarForm(){
    //   //Esta en esta variable javascript se recogen todas las variables del formulario en una sóla.
    //  var dataString = $('#form').serialize();
    //   //Este es un alert de prueba de el serialize. Debería hacer un alert con las variables POST
    //   alert('Datos serializados: '+dataString);

    //   $.ajax({
    //     type: "POST",
    //     url:"<?php echo base_url(); ?>ejemploController/verf",
    //     data: dataString,
    //     success:function(data){

    //       if (data == true){
    //         //Si se guardó el registro se resetea el formulario
    //         $('#form').each (function(){
    //             this.reset();
    //         });
    //         //Se muestra el mensaje msg_ok y se ocuta msg_no
    //         $('#msg_ok').show();
    //         $('#msg_no').hide();
            
    //       }else{
    //         //Se muestra el mensaje msg_on y se ocuta msg_ok
    //         $('#msg_no').show(); 
    //         $('#msg_ok').hide();
    //       }
    //     }
    //   });
    //   return false;          
    // };

  </script>
</head>
<body>
  <div id="container">
    <h1>CodeIgniter</h1>
    <div id="body">
      <h1>Bienvenido a mi web de Codeigniter</h1>
      <p>Estos son los usuarios registrados</p>
       <!--  <table border="1" align="center">
          <tr>
            <th>Nombre</th>
            <th>Fecha de Creación</th>
          </tr>
          <?php
          if ($resultados != FALSE) {
            foreach ($resultados->result() as $fila) {?>
            <tr>
              <td><?=$fila->username?></td>
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
        </tr>
      </table> --><br class="clear">   



      <form id="form" name="form">
        <label for="nombre">Nombre</label>
        <input type="text" size="20" name="nombre" id="nombre" value="">
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" size="20" name="apellido" id="apellido" value="">
        <br>
        <button type="button" name="guardar" id="guardar" class="btn btn-primary btn-sm" onclick="javascript:guardarForm()">Guardar</button>
      </form>
      <div id="msg_ok" class="alert alert-success"><strong>El registro se guardó correctamente</strong></div><br>
      <div id="msg_no" class="alert alert-warning "><strong>La registro ya existe</strong></div>
    </div>
  </body>
  </html>
</div>
</div>