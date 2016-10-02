$('.carousel').carousel({
	interval:4000
}
)

 $(function() {
        $('#Myventana').on('hidden.bs.modal', function(){
         $(this).removeData('bs.modal');
        });
    });

 <!--DATEPICKER-->
 $(function() {                
 $.datepicker.regional['es'] = {
  prevText: '<Ant',
  nextText: 'Sig>',
  monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
  monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
  dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
  dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
  weekHeader: 'Sm',
  dateFormat: 'dd/mm/yy',
  firstDay: 1,
  isRTL: false,
  showMonthAfterYear: false,
  yearSuffix: ''};
  $.datepicker.setDefaults($.datepicker.regional['es']);

  $( "#fecha_nac" ).datepicker({

            closeText: 'Cerrar',
            changeYear:true,
            changeMonth: true,
            minDate: '-70Y',
            maxDate: '-18Y',
            showButtonPanel: true,
});
});


 <!-- FIN DATEPICKER-->