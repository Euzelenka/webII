$(document).ready(function () {
  $("#formulario").bind("submit", function () {
    //CAPTURAMOS EL BOTON DE ENVIO
    var btnEnviar = $("#btnEnviar");

    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data:$(this).serialize(),
      beforeSend: function(){
        /*
                * Esta función se ejecuta durante el envió de la petición al
                * servidor.
                * */
                btnEnviar.val("Enviando"); // Para input de tipo button
                btnEnviar.attr("disabled","disabled");
      },
      complete:function(data){
               /*
               * Se ejecuta al termino de la petición
               * */
               btnEnviar.val("Enviar formulario");
               btnEnviar.removeAttr("disabled");
      },
      success: function(data){
                /*
                * Se ejecuta cuando termina la petición y esta ha sido
                * correcta
                * */
                $(".resultado").html(data);
            },
            error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
                alert("Problemas al tratar de enviar el formulario");
            },
    });
    return false;
  });
});
