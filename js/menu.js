$(document).ready(function(){
// if($(window).width() <= 799){

    var pull = $('.menu-op');
    contador = 1;
    menu = $('.nav');
    menuop = $('.serv-menu');
    navul = $('.nav li ul');

    $(function() {
                abrir = $('.abrir');
                cerrar = $('.cerrar');

                $(pull).on('click', function() {
                        menu.slideToggle(1000);
                        menu.css({
                           'position': 'absolute',
                           'width': '100%',
                           'z-index':'2'
                        });

                });

                 $(cerrar).on('click', function() {
                     menu.slideToggle(1000);
                });

                $(menuop).on('click', function(e) {
                    e.preventDefault();
                if (contador == 1) {
                   navul.slideToggle(1000);
                    contador = 0;
                } else {
                    navul.slideToggle(1000);
                    contador = 1;
                 }
    });
            });
// }

});
