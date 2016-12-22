  <div class="main container">
    <form method="POST" action="<?php echo base_url(); ?>participantes/guardar" id="formRegistro" name="formRegistro">
      <div class="row">
        <div class="col-md-3">
         <label for="nombres">Nombres</label>
         <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="<?php echo set_value('nombres'); ?>">
         <div class="msj-error-validation"><?php echo form_error('nombres'); ?></div>
       </div>

       <div class="col-md-3">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo set_value('apellidos'); ?>">
        <div class="msj-error-validation"><?php echo form_error('apellidos'); ?></div>
      </div>
      <div class="col-md-3">
       <?php echo form_label('Tipo de Identificación', 'tip_ident', $attributes=array()); ?>
       <?php 
       $options = array(
        ""=>"Escoja una opción",
        "CC"=>"Cédula",
        "CE"=>"Cédula Extranjera",
        "TI"=>"Tarjeta de Identidad",
        "PT"=>"Pasaporte"

        );
        ?>
        <?php echo form_dropdown('tip_ident',$options,set_value('tip_ident'),array("class"=>"form-control"));?>
        <div class="msj-error-validation"><?php echo form_error('tip_ident'); ?></div>
      </div>
      <div class="col-md-3">
       <label for="numero_ident">N° de Identificación</label>
       <input type="text" class="form-control" id="numero_ident" name="numero_ident" placeholder="Número de Idenficación" value="<?php echo set_value('numero_ident'); ?>">
       <div class="msj-error-validation"><?php echo form_error('numero_ident'); ?></div>
     </div>
   </div><!--Fin row-->
   <br>
   <div class="row"><!--Inicio Fila-->
     <!-- Radio Buttons -->
     <!-- Radio Buttons -->
     <div class="col-md-3"><!--Inicio Columna-->
       <?php echo form_label('Sexo', '', $attributes=array()); ?>
       <div class="radio">
         <label>
           <?php echo form_radio("sexo","M",set_radio("sexo","M"))?>Masculino
         </label>
       </div>
       <div class="radio">
         <label>
           <?php echo form_radio("sexo","F",set_radio("sexo","F"))?>Femenino
         </label>
       </div>
       <div class="msj-error-validation"><?php echo form_error('sexo'); ?></div>
     </div><!--Fin Columna-->
     <div class="col-md-3"><!--Inicio Columna-->
       <?php echo form_label('Tipo de Sangre', 'tipo_sangre', $attributes=array()); ?>
       <?php 
       $options = array(
        ""=>"Escoja una opción",
        "AB+"=>"AB+",
        "AB"=>"AB",
        "A+"=>"A+",
        "A-"=>"A-",
        "B-"=>"B-",
        "B+"=>"B+",
        "O+"=>"O+",
        "O-"=>"O-"
        );
        ?>
        <?php echo form_dropdown('tipo_sangre',$options,set_value('tipo_sangre'),array("class"=>"form-control"));?>
        <div class="msj-error-validation"><?php echo form_error('tipo_sangre'); ?></div>
      </div><!--Fin Columna-->
      <div class="col-md-3"><!--Inicio Columna-->
       <label for="fecha_nac">Fecha de Nacimiento</label>
       <div class='input-group'>
        <input type='text' class="date-picker form-control" name="fecha_nac" id="fecha_nac" placeholder="Fecha de Nacimiento" value="<?php echo set_value('fecha_nac'); ?>"/>
        <div class="msj-error-validation"><?php echo form_error('fecha_nac'); ?></div>
      </div>
    </div><!--Fin Columna-->
    <div class="col-md-3">
     <?php echo form_label('De qué Pais eres', 'pais', $attributes=array()); ?>
     <?php
     $paises = array(
      ''   => 'Escoja un pais',
      'AF' => 'Afghanistan',
      'AX' => 'Aland Islands',
      'AL' => 'Albania',
      'DZ' => 'Algeria',
      'AS' => 'American Samoa',
      'AD' => 'Andorra',
      'AO' => 'Angola',
      'AI' => 'Anguilla',
      'AQ' => 'Antarctica',
      'AG' => 'Antigua And Barbuda',
      'AR' => 'Argentina',
      'AM' => 'Armenia',
      'AW' => 'Aruba',
      'AU' => 'Australia',
      'AT' => 'Austria',
      'AZ' => 'Azerbaijan',
      'BS' => 'Bahamas',
      'BH' => 'Bahrain',
      'BD' => 'Bangladesh',
      'BB' => 'Barbados',
      'BY' => 'Belarus',
      'BE' => 'Belgium',
      'BZ' => 'Belize',
      'BJ' => 'Benin',
      'BM' => 'Bermuda',
      'BT' => 'Bhutan',
      'BO' => 'Bolivia',
      'BA' => 'Bosnia And Herzegovina',
      'BW' => 'Botswana',
      'BV' => 'Bouvet Island',
      'BR' => 'Brazil',
      'IO' => 'British Indian Ocean Territory',
      'BN' => 'Brunei Darussalam',
      'BG' => 'Bulgaria',
      'BF' => 'Burkina Faso',
      'BI' => 'Burundi',
      'KH' => 'Cambodia',
      'CM' => 'Cameroon',
      'CA' => 'Canada',
      'CV' => 'Cape Verde',
      'KY' => 'Cayman Islands',
      'CF' => 'Central African Republic',
      'TD' => 'Chad',
      'CL' => 'Chile',
      'CN' => 'China',
      'CX' => 'Christmas Island',
      'CC' => 'Cocos (Keeling) Islands',
      'CO' => 'Colombia',
      'KM' => 'Comoros',
      'CG' => 'Congo',
      'CD' => 'Congo, Democratic Republic',
      'CK' => 'Cook Islands',
      'CR' => 'Costa Rica',
      'CI' => 'Cote D\'Ivoire',
      'HR' => 'Croatia',
      'CU' => 'Cuba',
      'CY' => 'Cyprus',
      'CZ' => 'Czech Republic',
      'DK' => 'Denmark',
      'DJ' => 'Djibouti',
      'DM' => 'Dominica',
      'DO' => 'Dominican Republic',
      'EC' => 'Ecuador',
      'EG' => 'Egypt',
      'SV' => 'El Salvador',
      'GQ' => 'Equatorial Guinea',
      'ER' => 'Eritrea',
      'EE' => 'Estonia',
      'ET' => 'Ethiopia',
      'FK' => 'Falkland Islands (Malvinas)',
      'FO' => 'Faroe Islands',
      'FJ' => 'Fiji',
      'FI' => 'Finland',
      'FR' => 'France',
      'GF' => 'French Guiana',
      'PF' => 'French Polynesia',
      'TF' => 'French Southern Territories',
      'GA' => 'Gabon',
      'GM' => 'Gambia',
      'GE' => 'Georgia',
      'DE' => 'Germany',
      'GH' => 'Ghana',
      'GI' => 'Gibraltar',
      'GR' => 'Greece',
      'GL' => 'Greenland',
      'GD' => 'Grenada',
      'GP' => 'Guadeloupe',
      'GU' => 'Guam',
      'GT' => 'Guatemala',
      'GG' => 'Guernsey',
      'GN' => 'Guinea',
      'GW' => 'Guinea-Bissau',
      'GY' => 'Guyana',
      'HT' => 'Haiti',
      'HM' => 'Heard Island & Mcdonald Islands',
      'VA' => 'Holy See (Vatican City State)',
      'HN' => 'Honduras',
      'HK' => 'Hong Kong',
      'HU' => 'Hungary',
      'IS' => 'Iceland',
      'IN' => 'India',
      'ID' => 'Indonesia',
      'IR' => 'Iran, Islamic Republic Of',
      'IQ' => 'Iraq',
      'IE' => 'Ireland',
      'IM' => 'Isle Of Man',
      'IL' => 'Israel',
      'IT' => 'Italy',
      'JM' => 'Jamaica',
      'JP' => 'Japan',
      'JE' => 'Jersey',
      'JO' => 'Jordan',
      'KZ' => 'Kazakhstan',
      'KE' => 'Kenya',
      'KI' => 'Kiribati',
      'KR' => 'Korea',
      'KW' => 'Kuwait',
      'KG' => 'Kyrgyzstan',
      'LA' => 'Lao People\'s Democratic Republic',
      'LV' => 'Latvia',
      'LB' => 'Lebanon',
      'LS' => 'Lesotho',
      'LR' => 'Liberia',
      'LY' => 'Libyan Arab Jamahiriya',
      'LI' => 'Liechtenstein',
      'LT' => 'Lithuania',
      'LU' => 'Luxembourg',
      'MO' => 'Macao',
      'MK' => 'Macedonia',
      'MG' => 'Madagascar',
      'MW' => 'Malawi',
      'MY' => 'Malaysia',
      'MV' => 'Maldives',
      'ML' => 'Mali',
      'MT' => 'Malta',
      'MH' => 'Marshall Islands',
      'MQ' => 'Martinique',
      'MR' => 'Mauritania',
      'MU' => 'Mauritius',
      'YT' => 'Mayotte',
      'MX' => 'Mexico',
      'FM' => 'Micronesia, Federated States Of',
      'MD' => 'Moldova',
      'MC' => 'Monaco',
      'MN' => 'Mongolia',
      'ME' => 'Montenegro',
      'MS' => 'Montserrat',
      'MA' => 'Morocco',
      'MZ' => 'Mozambique',
      'MM' => 'Myanmar',
      'NA' => 'Namibia',
      'NR' => 'Nauru',
      'NP' => 'Nepal',
      'NL' => 'Netherlands',
      'AN' => 'Netherlands Antilles',
      'NC' => 'New Caledonia',
      'NZ' => 'New Zealand',
      'NI' => 'Nicaragua',
      'NE' => 'Niger',
      'NG' => 'Nigeria',
      'NU' => 'Niue',
      'NF' => 'Norfolk Island',
      'MP' => 'Northern Mariana Islands',
      'NO' => 'Norway',
      'OM' => 'Oman',
      'PK' => 'Pakistan',
      'PW' => 'Palau',
      'PS' => 'Palestinian Territory, Occupied',
      'PA' => 'Panama',
      'PG' => 'Papua New Guinea',
      'PY' => 'Paraguay',
      'PE' => 'Peru',
      'PH' => 'Philippines',
      'PN' => 'Pitcairn',
      'PL' => 'Poland',
      'PT' => 'Portugal',
      'PR' => 'Puerto Rico',
      'QA' => 'Qatar',
      'RE' => 'Reunion',
      'RO' => 'Romania',
      'RU' => 'Russian Federation',
      'RW' => 'Rwanda',
      'BL' => 'Saint Barthelemy',
      'SH' => 'Saint Helena',
      'KN' => 'Saint Kitts And Nevis',
      'LC' => 'Saint Lucia',
      'MF' => 'Saint Martin',
      'PM' => 'Saint Pierre And Miquelon',
      'VC' => 'Saint Vincent And Grenadines',
      'WS' => 'Samoa',
      'SM' => 'San Marino',
      'ST' => 'Sao Tome And Principe',
      'SA' => 'Saudi Arabia',
      'SN' => 'Senegal',
      'RS' => 'Serbia',
      'SC' => 'Seychelles',
      'SL' => 'Sierra Leone',
      'SG' => 'Singapore',
      'SK' => 'Slovakia',
      'SI' => 'Slovenia',
      'SB' => 'Solomon Islands',
      'SO' => 'Somalia',
      'ZA' => 'South Africa',
      'GS' => 'South Georgia And Sandwich Isl.',
      'ES' => 'Spain',
      'LK' => 'Sri Lanka',
      'SD' => 'Sudan',
      'SR' => 'Suriname',
      'SJ' => 'Svalbard And Jan Mayen',
      'SZ' => 'Swaziland',
      'SE' => 'Sweden',
      'CH' => 'Switzerland',
      'SY' => 'Syrian Arab Republic',
      'TW' => 'Taiwan',
      'TJ' => 'Tajikistan',
      'TZ' => 'Tanzania',
      'TH' => 'Thailand',
      'TL' => 'Timor-Leste',
      'TG' => 'Togo',
      'TK' => 'Tokelau',
      'TO' => 'Tonga',
      'TT' => 'Trinidad And Tobago',
      'TN' => 'Tunisia',
      'TR' => 'Turkey',
      'TM' => 'Turkmenistan',
      'TC' => 'Turks And Caicos Islands',
      'TV' => 'Tuvalu',
      'UG' => 'Uganda',
      'UA' => 'Ukraine',
      'AE' => 'United Arab Emirates',
      'GB' => 'United Kingdom',
      'US' => 'United States',
      'UM' => 'United States Outlying Islands',
      'UY' => 'Uruguay',
      'UZ' => 'Uzbekistan',
      'VU' => 'Vanuatu',
      'VE' => 'Venezuela',
      'VN' => 'Viet Nam',
      'VG' => 'Virgin Islands, British',
      'VI' => 'Virgin Islands, U.S.',
      'WF' => 'Wallis And Futuna',
      'EH' => 'Western Sahara',
      'YE' => 'Yemen',
      'ZM' => 'Zambia',
      'ZW' => 'Zimbabwe',
      );
      ?>
      <?php echo form_dropdown('pais',$paises,set_value('pais'),array("class"=>"form-control"));?>
      <div class="msj-error-validation"><?php echo form_error('pais'); ?></div>
    </div><!--Fin Fila-->
  </div>
  <br>
  <div class="row"><!--Inicio Fila-->
    <div class="col-md-3">
      <label for="ciudad">Ciudad</label>
      <input type="text" class="form-control" placeholder="Ciudad" name="ciudad" id="ciudad" value="<?php echo set_value('ciudad'); ?>">
      <div class="msj-error-validation"><?php echo form_error('ciudad'); ?></div>
    </div>
    <div class="col-md-3">
      <label for="direccion">Dirección</label>
      <input type="text" class="form-control"  placeholder="Dirección" name="direccion" id="direccion" value="<?php echo set_value('direccion'); ?>">
      <div class="msj-error-validation"><?php echo form_error('direccion'); ?></div>
    </div>
    <div class="col-md-3">
      <label for="barrio">Barrio</label>
      <input type="text" class="form-control" placeholder="Barrio" name="barrio" id="barrio" value="<?php echo set_value('barrio'); ?>">
      <div class="msj-error-validation"><?php echo form_error('barrio'); ?></div>
    </div>
    <div class="col-md-3">
     <label for="celular">Celular</label>
     <input type="text" class="form-control"  placeholder="Celular" name="celular" id="celular" value="<?php echo set_value('celular'); ?>">
     <div class="msj-error-validation"><?php echo form_error('celular'); ?></div>
   </div>
 </div>
 <br>
 <div class="row">
  <div class="col-md-3">
    <label for="email">Email</label>
    <input type="email" class="form-control"  placeholder="Email" name="email" id="email" value="<?php echo set_value('email'); ?>">
    <div class="msj-error-validation"><?php echo form_error('email'); ?></div>
  </div>
  <div class="col-md-3">
   <label for="conf_email">Confirmar Email</label>
   <input type="email" class="form-control" placeholder="Confirmar Email" name="conf_email" id="conf_email" value="<?php echo set_value('conf_email'); ?>">
   <div class="msj-error-validation"><?php echo form_error('conf_email'); ?></div>
 </div>
 <div class="col-md-3">
 <?php echo form_label('Categoria a participar', 'categoria', $attributes=array()); ?>
       <?php 
       $options = array(
        ""=>"Escoja una opción",
        "101"=>"Juvenil (17 años – 19 años",
        "102"=>"Mayores (20 años – 39 años)",
        "103"=>"Senior (40años – 49 años)",
        "104"=>"Master (50 años - 59años)",
        "105"=>"Veteranos (70 años en adelante)",
        "106"=>"Discapacitados (abierta)",
        "107"=>"8 años – 10 años",
        "108"=>"11 años – 16 años",
        "109"=>"Recreativas (20 años – 39 años)",
        "110"=>"Recreativas (40 años- 49 años)",
        "111"=>"Recreativas (50 años en adelante)",
        "112"=>"Fuerzas Militares"
        );
        ?>
        <?php echo form_dropdown('categoria',$options,set_value('categoria'),array("class"=>"form-control"));?>
        <div class="msj-error-validation"><?php echo form_error('categoria'); ?></div>
</div>
<div class="col-md-3">
 <?php echo form_label('Kilómetros a participar', 'kilometros', $attributes=array()); ?>
       <?php 
       $options = array(
        ""=>"Escoja una opción",
        "15"=>"15KM",
        "5"=>"5KM")
        ?>
        <?php echo form_dropdown('kilometros',$options,set_value('kilometros'),array("class"=>"form-control"));?>
        <div class="msj-error-validation"><?php echo form_error('kilometros'); ?></div>
</div>
</div><!--Fin Fila-->

<br>
<button type="submit" name="enviar" id="enviar" class="btn btn-success"><b>Enviar</b></button>
</form>
</div>
