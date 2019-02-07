new WOW().init();

$(document).ready(function () {
  let showBoton = false;
  $('.ancla').click(function () {
    var link = $(this);
    var anchor = link.attr('href');
    $('html, body')
      .stop()
      .animate(
        {
          scrollTop: jQuery(anchor).offset().top
        },
        2000
      );
    return false;
  });
  $('.show-boton').click(function (event) {
    if (!showBoton){
      event.target.innerHTML = 'Ver menos';
      showBoton = !showBoton;
    } else {
      event.target.innerHTML = 'Ver más';
      showBoton = !showBoton;
    }
    $('.colapsable').slideToggle('slow');
  });

  // AJUSTES DE ALTURA DE LA PAGINA
  var alto = $(window).height();

  ajusteAltura();

  function ajusteAltura() {
    $(".seccion").css({ "height": alto + "px" });
    $(".seccionMin").css({ "min-height": alto + "px" });

  }

  //  FUNCIONES DEL MENU 
  $(".botonMenu").click(function () {
    $(".navegacion").fadeToggle("slow")
    $(".navegacion").css({ "display": "flex", });
  })

  //  FUNCIONES DE LA SECCION PROYECTOS
  // UNO
  //show evento description
  $('.evento').each((index, element) => {
    $(element).click(() => $(element).find('.evento-content').slideToggle("slow"));
  });
});