$(document).ready(function(){

    var pull = $('.menu-op');
    menu = $('.nav');

    // $(window).scroll(function(){
    //     if($(this).scrollTop() > 5){
    //         menu.css({
    //             'position': 'fixed'
    //         });

           
    //     }
       
    // });

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
            });

});
