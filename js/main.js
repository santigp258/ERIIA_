
 $(function(){

    // Lettering

    $(".nombre-sitio").lettering();

     //identificar posición en la página
     $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
     $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
     $('body.tyc .navegacion-principal a:contains("TyC")').addClass('activo');

    //Menu fijado
    var windowHeight = $(window).height();
    var barraAltura = $(".barra").innerHeight();
  
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $(".barra").addClass("fixed");
            $("body").css({"margin-top" : barraAltura + "px"});

        } else{
            $(".barra").removeClass("fixed");
            $("body").css({"margin-top" : "0px" })
        }
    });

    // Menu responsive

    $(".menu-movil").on("click", function(){
        $(".navegacion-principal").slideToggle();
    });


    //programa conferencia
    $(".programa-evento .info-curso:first").show();
    $(".menu programa a:first").addClass("activo");

    $(".menu-programa a").on("click", function(){
        $(".menu-programa a").removeClass("activo");
        $(this).addClass("activo");
        $(".ocultar").hide();
        var enlace = $(this).attr("href");
        $(enlace).fadeIn(1000);

        return false;
    });

//Animaciones para los números

var resumenLista = jQuery('.resumen-evento');
if(resumenLista.length > 0){
    $('.resumen-evento').waypoint(function(){
        $(".resumen-evento li:nth-child(1) p").animateNumber({ number: 6}, 1200);
        $(".resumen-evento li:nth-child(2) p").animateNumber({number : 5}, 1200);
        $(".resumen-evento li:nth-child(3) p").animateNumber({number : 3}, 1200);
        $(".resumen-evento li:nth-child(4) p").animateNumber({number : 2}, 1200);
    }, {
        offset: '60%' //porcentanje de pantalla a recorrer para ejecutar waypoints
    });
}



 //    Cuenta regresiva

    $(".cuenta-regresiva").countdown("2020/09/25 10:00:00", function(event){
        $("#dias").html(event.strftime("%D"));
        $("#horas").html(event.strftime("%H"));
        $("#minutos").html(event.strftime("%M"));
        $("#segundos").html(event.strftime("%S"));
    })

   //Colorbox
   
   $('.invitado-info').colorbox({inline:true, width:"50%"});
 });



    