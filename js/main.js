$(()=>{
    'use strict';
    // toggle active class
    $('.navbar-nav li').click(function(){
        $('.navbar-nav li').removeClass('active');
        $(this).addClass('active');
    })

    // carousel time
    $('.carousel').carousel({
        interval:1000
    });

});