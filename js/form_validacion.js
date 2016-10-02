/*funcion ajax para comprobar si el email existe en la base de datos*/
$(document).ready(function() {
  console.log ("Hola");

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#form").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      numero_ident: {
        required:true,
        digits: true,
        minlength: 6,
        maxlength: 12
      },
      nombre: {
        required: true,
        texto: true
      },
       apellido: {
        required: true,
        texto: true
      },

      fecha_nac: "required",

      ciudad: {
        required: true,
        texto: true,
        minlength: 4,
        maxlength:30
        
      },

      direccion: "required",

      barrio: {
        required: true,
        minlength: 9,
        maxlength:60
      },

      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      
      conf_email:{
        required: true,
        equalTo: "#email"
      },

      telefono: {
        required:true,
        digits: true,
        minlength: 7,
        maxlength: 10
      },
      celular: {
        required:true,
        digits: true,
        minlength: 10,
        maxlength: 10
      }
    },
    
    
    messages: {
      numero_ident: {
        minlength: "Por favor, no escribas menos de 6 dígitos.",
        maxlength: "Por favor, no escribas más de 12 dígitos."
      },
      conf_email:{
        required: "Por favor, confirmar el email",
        equalTo: "Por favor, no coinciden los emails, verificaquelo."
      },

       telefono: {
        minlength: "Por favor, no escribas menos de 7 dígitos.",
        maxlength: "Por favor, no escribas más de 10 dígitos."
      },
      celular: {
        minlength: "Por favor, no escribas menos de 10 dígitos.",
        maxlength: "Por favor, no escribas más de 10 dígitos."
      }
    },
    
    submitHandler: function(form) {
      form.submit();
    },

    highlight: function(element){
      $(element).parent().removeClass('has-success').addClass('has-error');
    }, 
    success: function(element){
      $(element).parent().removeClass('has-error').addClass('has-success');
    }
  });

  jQuery.validator.addMethod("texto", function(value, element) {
  return this.optional(element) || /^[a-zA-Záéóóúàèìòùäëïöüñ\s]+$/.test(value);
  }, 'Se permite sólo caracteres');

});

  jQuery.extend(jQuery.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida.",
  equalTo: "El valor del campo debe de ser igual al valor del campo indicado.",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});

