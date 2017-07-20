$(document).on("ready", function(){
    //Formularios dinamicos - clonar formularios
    var i=0;
    $(".new-personalData").on("click", function(e){
        e.preventDefault();

        i=$(".datapasajero").size()-1;

        $("div").find("#npasajeros").val(i+2);

        console.log("clonar formulario "+i);
        $formulario = $(".npasajero-"+i).clone();
        console.log("clonando de:  "+i);
        console.log("hay :  "+i+" Formularios");

        $formulario.find("h5").text("Pasajero "+(i+2)).after("<a class='remove' href='javascript:void(0)'><i class='glyphicon glyphicon-remove'></i></a>");        
        $formulario.removeClass().addClass("datapasajero npasajero npasajero-"+(i+1));

        //limpiando
        $(".npasajero-"+i).after($formulario.fadeIn(300));
        $(".npasajero-"+(i+1)).find("input[type=text]").val("");
        //$(".npasajero-"+(i+1)).find("input[name='tipopasajero-0']").prop('checked', false);
        i++;        
        console.log("Element "+i);
        $(".remove").off("click");
        $(".remove").on("click", function(e){
          e.preventDefault();

          console.log("remove elemento "+i);
          $(this).parent().css({"background-color":"green"})
          .fadeOut(900, function(){
            $(this).remove(); 
            $("div").find("#npasajeros").val(i+1);//par incrementar en el campo el numero de pasajeros
            recount()
        });
          i--;
          console.log("Elemento "+i);
        });
    });
    //reconteo de formularios : en elm caso que eliminamos en cualquier lugar se utileze esta funcion
    function recount(){
        $(".pasajeros").find(".datapasajero").each(function(index, element){
            $(element).find("h5").text("Pasajero "+(index+1));
            $(element).removeClass().addClass("datapasajero npasajero npasajero-"+index);

                $(element).parent().attr("for", $(this).val()+"-"+(index));
                $(element).attr("id", $(this).val()+"-"+(index));
            });
    }
})