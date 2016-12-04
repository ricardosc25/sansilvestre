<br clear="all">
<div class="main container">
    <div class="row">
       <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Check Username</title>
        <style type="text/css">
            ::selection{ background-color: #E13300; color: white; } ::moz-selection{ background-color: #E13300; color: white; } ::webkit-selection{ background-color: #E13300; color: white; } 
            body { background-color: #fff; margin: 40px; font: 13px/20px normal Helvetica, Arial, sans-serif; color: #4F5155; } 
            a { color: #003399; background-color: transparent; font-weight: normal; } 
            h1 { color: #444; background-color: transparent; border-bottom: 1px solid #D0D0D0; font-size: 19px; font-weight: normal; margin: 0 0 14px 0; padding: 14px 15px 10px 15px; } 
            #body{ margin: 0 15px 15px 15px; } 
            #container{ margin: 10px; border: 1px solid #D0D0D0; -webkit-box-shadow: 0 0 8px #D0D0D0; } 
            .alert-box { color:#555; border-radius:10px; font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; padding:10px 10px 10px 36px; margin:10px; } 
            .alert-box span { font-weight:bold; text-transform:uppercase; } 
            .error { background:#ffecec; border:1px solid #f5aca6; } 
            .success { background:#e9ffd9; border:1px solid #a6ca8a; } 
            #msgbx_err{ display: none; } 
            #msgbx_success{ display: none; } 
 
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            // $(function() {
            //     $('#txtuser').blur(function() {
            //         var name = $('#txtuser').val();
            //         $.post('<?php echo base_url(); ?>welcome/chk_usr', {usr_name: name}, function(d) {
            //             if (d == 1)
            //             {
            //                 $('#msgbx_success').css('display', 'none');
            //                 $('#msgbx_err').css('display', 'block');
                            
            //             }
            //             else
            //             {                      
            //                 $('#msgbx_err').css('display', 'none');
            //                 $('#msgbx_success').css('display', 'block');


            //             }
            //         });
            //     });
            // });
            $(function() {
                $('#form').submit(function() {
                    var name = $('#txtuser').val();
                    $.post('<?php echo base_url(); ?>welcome/chk_usr', {usr_name: name}, function(d) {
                        if (d == '1 ')
                        {   
                            // $('#msgbx_success').css('display', 'none');
                            // $('#msgbx_err').css('display', 'block');
                            $('#txtuser').focus();
                        }
                        else
                        {                      
                            alertify.alert("<b>Blog Reaccion Estudio</b> probando Alertify", function () {
                            //aqui introducimos lo que haremos tras cerrar la alerta.
                            location.href = 'http://www.google.es/';
                            });

                        }
                    });
                });
            });
        </script>              
    </head>
    <body>
        <div id="container">
            <h1>Signup</h1>
            <div id="body">
              <form id="form" name="form" action="" method="POST">
                <input type="text" value="" placeholder="Username" id="txtuser" name="txtuser" >
                <a href="javascript:void(0);" style="margin-left: 5px;" id="chk_avail">Check Availability</a>
                <div id="msgbx_err" class="alert-box error"><span>error: </span>User already exist with same name.</div>
                <div id="msgbx_success" class="alert-box success"><span>success: </span>Username available.</div>
            </div>
            <button type="submit" name="guardar" id="guardar" class="btn btn-primary btn-sm">Guardar</button>
            </form>
        </div>
    </body>
</html>
    </div>
</div>