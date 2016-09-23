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

  $(document).ready(function(){
    console.log ("Hola");

  $("#form").validate({   
    rules: {
      nombres: {
        required: true, 
        alphas: true    
      },
      apellidos: {
        required: true,
        alphas: true
      }
    },
    submitHandler: function(form){      
      form.submit();        
    },
    highlight: function(element){
      $(element).parent().removeClass('has-success').addClass('has-error');
    }, 
    success: function(element){
      $(element).parent().removeClass('has-error').addClass('has-success');
    }
  });

  jQuery.validator.addMethod("alphas", function(value, element) {
  return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, 'Sólo caracteres');

  jQuery.validator.addMethod("numbers", function(value, element) {
  return this.optional(element) || /^[1-9]+$/.test(value);
  }, 'Sólo números');


});