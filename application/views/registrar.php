<html>
<head>
  <script type="text/javascript">
      function enviarForm(){
        var dataString = $('#formRegistro').serialize();

        $.ajax({
            type: "POST",
            url:"<?php echo base_url(); ?>participantes/validarCedula",
            data: dataString,
            success: function(resp){
              if (resp == 1){
                $('#formRegistro').each (function(){
                   this.reset();
               });
                $("#message_success").show();
                $("#message_error").hide();
            }else{
               $("#message_error").show();
               $("#numero_ident").focus();
               $("#message_success").hide();
           }
       },
       error: function(){
          alert('La información no se guardó, verifique que los datos del formulario sean los correctos para cada campo.)');
      }
  });
        return false;
    }

</script>
</head>
</html>
<div class="main container" id="registrar">
    <h1><div class="block-title"><span class="deco"></span><span class="text">Formulario de inscripción</span></div></h1>
    <?php $this->load->view('plantillas/menu_registro'); ?><br>	
    <div class="alert alert-success">
        <strong>LA INSCRIPCIÓN TIENE UN COSTO DE $40.000, </strong>las rutas las podras ver en el siguiente link <a href="<?php echo base_url(); ?>lacarrera/recorridos" class="alert-link">Clic aquí</a>.
        <div class="alert alert-info">
        <strong>Confirme su inscripción en la CRA 30 # 43-40 o en la entidad financiera, una vez realizado ésto reclame su número y su kit.</strong>
    </div>
    </div>
    <form id="formRegistro" class="form-horizontal" role="form" method="post">
        <div class="row">
          <div class="col-md-3">
              <label for="nombre" class="hidden-xs control-label">Nombres</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres"> 
          </div>
          <div class="col-md-3">
              <label for="apellido" class="hidden-xs control-label">Apellidos</label>
              <input type="text" class="form-control" name='apellido' id="apellido" placeholder="Apellidos">   
          </div>
          <div class="col-md-3">
              <label for="tip_ident" class="hidden-xs control-label">Tipo de Identificación</label>
              <select class="form-control" name="tip_ident" id="tip_ident">
                  <option value="" selected="selected" >Seleccione Tipo de Id</option>
                  <option value="CC">Cédula</option>
                  <option value="TI">Tarjeta Identidad</option>
                  <option value="CE">Cedula Extranjera</option>
                  <option value="PP">Pasaporte</option>
              </select>
          </div>
          <div class="col-md-3">
              <label for="numero_ident" class="hidden-xs control-label">Número de Idenficación</label>
              <input type="text" class="form-control"  placeholder="Número de Idenficación" name="numero_ident" id="numero_ident">
              <div id="message_error" style="display: none;
              max-width: 100%;
              margin-bottom: 5px;
              font-weight: 700;" class="error" role="alert" return>El número de identificación ya existe</div>
          </div>
      </div>
      <div class="row">
       <div class="col-md-3">
          <label for="categoria" class="hidden-xs control-label">Categoria a participar</label>
          <select class="form-control" name="categoria" id="categoria">
              <option value="" selected="selected" >Seleccione Categoría</option>
              <option value="1">Juvenil (17 años – 19 años)</option>
              <option value="2">Mayores (20 años – 39 años)</option>
              <option value="3">Senior (40años – 49 años)</option>
              <option value="4">Master (50 años - 59años)</option>
              <option value="5">Veteranos (70 años en adelante)</option>
              <option value="6">Discapacitados (abierta)</option>
              <option value="7">8 años – 10 años</option>
              <option value="8">11 años – 16 años</option>
              <option value="9">Recreativas (20 años – 39 años)</option>
              <option value="10">Recreativas (40 años- 49 años)</option>
              <option value="11">Recreativas (50 años en adelante)</option>
              <option value="12">Fuerzas Militares</option>    
          </select>
      </div>
      <div class="col-md-3">
          <label for="kilometros" class="hidden-xs control-label">Kilometros a participar</label>
          <select class="form-control" name="kilometros" id="kilometros">
              <option value="" selected="selected" >Seleccione Kilometros</option>
              <option value="15">15KM</option>
              <option value="5">5KM</option>
          </select>
      </div>
      <div class="col-md-3">
          <label for="sexo" class="control-label">Sexo</label>
          <div class="radio">
              <label class="radio-inline"><input type="radio" name="sexo" value="M">Masculino</label>
              <label class="radio-inline"><input type="radio" name="sexo" value="F">Femenino</label>
          </div>
      </div>

      <div class="col-md-3">
        <label for="tipo_sangre" class="control-label">Tipo de sangre</label>
        <select class="form-control" name="tipo_sangre" id="tipo_sangre">
            <option value="">Seleccione</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B+">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
    </div>
    <div class="col-md-3">
      <label for="fecha_nac" class="hidden-xs control-label">Fecha de Nacimiento</label>
      <div class='input-group'>
          <input type='text' class="date-picker form-control" name="fecha_nac" id="fecha_nac" />
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
      </span>
  </div>     
</div>
<div class="col-md-3">
    <label for="pais" class="control-label">Pais</label>
    <select class="form-control" name="pais" id="pais">
        <option value="AF">Afganistán</option>
        <option value="AL">Albania</option>
        <option value="DE">Alemania</option>
        <option value="AD">Andorra</option>
        <option value="AO">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AQ">Antártida</option>
        <option value="AG">Antigua y Barbuda</option>
        <option value="AN">Antillas Holandesas</option>
        <option value="SA">Arabia Saudí</option>
        <option value="DZ">Argelia</option>
        <option value="AR">Argentina</option>
        <option value="AM">Armenia</option>
        <option value="AW">Aruba</option>
        <option value="AU">Australia</option>
        <option value="AT">Austria</option>
        <option value="AZ">Azerbaiyán</option>
        <option value="BS">Bahamas</option>
        <option value="BH">Bahrein</option>
        <option value="BD">Bangladesh</option>
        <option value="BB">Barbados</option>
        <option value="BE">Bélgica</option>
        <option value="BZ">Belice</option>
        <option value="BJ">Benin</option>
        <option value="BM">Bermudas</option>
        <option value="BY">Bielorrusia</option>
        <option value="MM">Birmania</option>
        <option value="BO">Bolivia</option>
        <option value="BA">Bosnia y Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BR">Brasil</option>
        <option value="BN">Brunei</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="BT">Bután</option>
        <option value="CV">Cabo Verde</option>
        <option value="KH">Camboya</option>
        <option value="CM">Camerún</option>
        <option value="CA">Canadá</option>
        <option value="TD">Chad</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CY">Chipre</option>
        <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
        <option value="CO" selected>Colombia</option>
        <option value="KM">Comores</option>
        <option value="CG">Congo</option>
        <option value="CD">Congo, República Democrática del</option>
        <option value="KR">Corea</option>
        <option value="KP">Corea del Norte</option>
        <option value="CI">Costa de Marfíl</option>
        <option value="CR">Costa Rica</option>
        <option value="HR">Croacia (Hrvatska)</option>
        <option value="CU">Cuba</option>
        <option value="DK">Dinamarca</option>
        <option value="DJ">Djibouti</option>
        <option value="DM">Dominica</option>
        <option value="EC">Ecuador</option>
        <option value="EG">Egipto</option>
        <option value="SV">El Salvador</option>
        <option value="AE">Emiratos Árabes Unidos</option>
        <option value="ER">Eritrea</option>
        <option value="SI">Eslovenia</option>
        <option value="ES">España</option>
        <option value="US">Estados Unidos</option>
        <option value="EE">Estonia</option>
        <option value="ET">Etiopía</option>
        <option value="FJ">Fiji</option>
        <option value="PH">Filipinas</option>
        <option value="FI">Finlandia</option>
        <option value="FR">Francia</option>
        <option value="GA">Gabón</option>
        <option value="GM">Gambia</option>
        <option value="GE">Georgia</option>
        <option value="GH">Ghana</option>
        <option value="GI">Gibraltar</option>
        <option value="GD">Granada</option>
        <option value="GR">Grecia</option>
        <option value="GL">Groenlandia</option>
        <option value="GP">Guadalupe</option>
        <option value="GU">Guam</option>
        <option value="GT">Guatemala</option>
        <option value="GY">Guayana</option>
        <option value="GF">Guayana Francesa</option>
        <option value="GN">Guinea</option>
        <option value="GQ">Guinea Ecuatorial</option>
        <option value="GW">Guinea-Bissau</option>
        <option value="HT">Haití</option>
        <option value="HN">Honduras</option>
        <option value="HU">Hungría</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IQ">Irak</option>
        <option value="IR">Irán</option>
        <option value="IE">Irlanda</option>
        <option value="BV">Isla Bouvet</option>
        <option value="CX">Isla de Christmas</option>
        <option value="IS">Islandia</option>
        <option value="KY">Islas Caimán</option>
        <option value="CK">Islas Cook</option>
        <option value="CC">Islas de Cocos o Keeling</option>
        <option value="FO">Islas Faroe</option>
        <option value="HM">Islas Heard y McDonald</option>
        <option value="FK">Islas Malvinas</option>
        <option value="MP">Islas Marianas del Norte</option>
        <option value="MH">Islas Marshall</option>
        <option value="UM">Islas menores de Estados Unidos</option>
        <option value="PW">Islas Palau</option>
        <option value="SB">Islas Salomón</option>
        <option value="SJ">Islas Svalbard y Jan Mayen</option>
        <option value="TK">Islas Tokelau</option>
        <option value="TC">Islas Turks y Caicos</option>
        <option value="VI">Islas Vírgenes (EEUU)</option>
        <option value="VG">Islas Vírgenes (Reino Unido)</option>
        <option value="WF">Islas Wallis y Futuna</option>
        <option value="IL">Israel</option>
        <option value="IT">Italia</option>
        <option value="JM">Jamaica</option>
        <option value="JP">Japón</option>
        <option value="JO">Jordania</option>
        <option value="KZ">Kazajistán</option>
        <option value="KE">Kenia</option>
        <option value="KG">Kirguizistán</option>
        <option value="KI">Kiribati</option>
        <option value="KW">Kuwait</option>
        <option value="LA">Laos</option>
        <option value="LS">Lesotho</option>
        <option value="LV">Letonia</option>
        <option value="LB">Líbano</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libia</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lituania</option>
        <option value="LU">Luxemburgo</option>
        <option value="MK">Macedonia, Ex-República Yugoslava de</option>
        <option value="MG">Madagascar</option>
        <option value="MY">Malasia</option>
        <option value="MW">Malawi</option>
        <option value="MV">Maldivas</option>
        <option value="ML">Malí</option>
        <option value="MT">Malta</option>
        <option value="MA">Marruecos</option>
        <option value="MQ">Martinica</option>
        <option value="MU">Mauricio</option>
        <option value="MR">Mauritania</option>
        <option value="YT">Mayotte</option>
        <option value="MX">México</option>
        <option value="FM">Micronesia</option>
        <option value="MD">Moldavia</option>
        <option value="MC">Mónaco</option>
        <option value="MN">Mongolia</option>
        <option value="MS">Montserrat</option>
        <option value="MZ">Mozambique</option>
        <option value="NA">Namibia</option>
        <option value="NR">Nauru</option>
        <option value="NP">Nepal</option>
        <option value="NI">Nicaragua</option>
        <option value="NE">Níger</option>
        <option value="NG">Nigeria</option>
        <option value="NU">Niue</option>
        <option value="NF">Norfolk</option>
        <option value="NO">Noruega</option>
        <option value="NC">Nueva Caledonia</option>
        <option value="NZ">Nueva Zelanda</option>
        <option value="OM">Omán</option>
        <option value="NL">Países Bajos</option>
        <option value="PA">Panamá</option>
        <option value="PG">Papúa Nueva Guinea</option>
        <option value="PK">Paquistán</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Perú</option>
        <option value="PN">Pitcairn</option>
        <option value="PF">Polinesia Francesa</option>
        <option value="PL">Polonia</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="UK">Reino Unido</option>
        <option value="CF">República Centroafricana</option>
        <option value="CZ">República Checa</option>
        <option value="ZA">República de Sudáfrica</option>
        <option value="DO">República Dominicana</option>
        <option value="SK">República Eslovaca</option>
        <option value="RE">Reunión</option>
        <option value="RW">Ruanda</option>
        <option value="RO">Rumania</option>
        <option value="RU">Rusia</option>
        <option value="EH">Sahara Occidental</option>
        <option value="KN">Saint Kitts y Nevis</option>
        <option value="WS">Samoa</option>
        <option value="AS">Samoa Americana</option>
        <option value="SM">San Marino</option>
        <option value="VC">San Vicente y Granadinas</option>
        <option value="SH">Santa Helena</option>
        <option value="LC">Santa Lucía</option>
        <option value="ST">Santo Tomé y Príncipe</option>
        <option value="SN">Senegal</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leona</option>
        <option value="SG">Singapur</option>
        <option value="SY">Siria</option>
        <option value="SO">Somalia</option>
        <option value="LK">Sri Lanka</option>
        <option value="PM">St Pierre y Miquelon</option>
        <option value="SZ">Suazilandia</option>
        <option value="SD">Sudán</option>
        <option value="SE">Suecia</option>
        <option value="CH">Suiza</option>
        <option value="SR">Surinam</option>
        <option value="TH">Tailandia</option>
        <option value="TW">Taiwán</option>
        <option value="TZ">Tanzania</option>
        <option value="TJ">Tayikistán</option>
        <option value="TF">Territorios franceses del Sur</option>
        <option value="TP">Timor Oriental</option>
        <option value="TG">Togo</option>
        <option value="TO">Tonga</option>
        <option value="TT">Trinidad y Tobago</option>
        <option value="TN">Túnez</option>
        <option value="TM">Turkmenistán</option>
        <option value="TR">Turquía</option>
        <option value="TV">Tuvalu</option>
        <option value="UA">Ucrania</option>
        <option value="UG">Uganda</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistán</option>
        <option value="VU">Vanuatu</option>
        <option value="VE">Venezuela</option>
        <option value="VN">Vietnam</option>
        <option value="YE">Yemen</option>
        <option value="YU">Yugoslavia</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabue</option>
    </select>
</div>

<div class="col-md-3">
  <label for="ciudad" class="hidden-xs control-label">Ciudad</label>
  <input type="text" class="form-control" placeholder="Ciudad" name="ciudad" id="ciudad">
</div>
<div class="col-md-3">
  <label for="direccion" class="hidden-xs control-label">Dirección</label>
  <input type="text" class="form-control"  placeholder="Dirección" name="direccion" id="direccion">
  </div>

<div class="col-md-3">
  <label for="barrio" class="hidden-xs control-label">Barrio</label>
  <input type="text" class="form-control" placeholder="Barrio" name="barrio" id="barrio">
</div>
<div class="col-md-3">
  <label for="celular" class="hidden-xs control-label">Celular</label>
  <input type="text" class="form-control"  placeholder="celular" name="celular" id="celular">
</div>
<div class="col-md-3">
  <label for="email" class="hidden-xs control-label">Email</label>
  <input type="email" class="form-control"  placeholder="Email" name="email" id="email">
</div>
<div class="col-md-3">
  <label for="conf_email" class="hidden-xs control-label">Confirmar Email</label>
  <input type="email" class="form-control" placeholder="Confirmar Email" name="conf_email" id="conf_email">
</div>
</div> 
<br>
<button type="button" name="enviar" id="enviar" class="btn btn-primary btn-sm" onclick="javascript:enviarForm()">Enviar</button><br clear="all"><br clear="all">
<div id="message_success" style="display: none;" class="alert alert-success" role="alert">Registro exitoso</div>

</div>
</div>
</form>
</div>
