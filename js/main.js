"use strict";
//toggle cities list

$(document).ready(function () {
    $('.header .cities span').click(function () {
       $('.header .cities ul').toggleClass('dn');
    });
});

//show mobile menu
/*$(document).ready(function () {
    $('.burger').click(function () {
        console.log('click');
        $('.mobile_menu').toggleClass('hide_list');
    });
});*/

//active link
$(function () {
    $(".nav_main li a").each(function () {
        //window.location.href == this.href && $(this).addClass("active");
        window.location.href == this.href && $(this).parent().addClass("active");
        this.pathname == '/oformit-zayavku/' && $(this).parent().addClass("button button--fill");
    });
    $(".nav_footer li a").each(function () {
        window.location.href == this.href && $(this).parent().addClass("active_footer");
    });


});

//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        console.log('burger');
        showMenu = !showMenu;
        $('.mobile_menu').toggleClass('hide_list');
        if(showMenu){
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'

            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});

//open modal
$(document).ready(function () {
    console.log('ready')
});
$(document).ready(function () {
   $('.open-modal--callback').click(function () {
       $('.modal_callback').css('display', 'flex');
   });
});

//close modal
$(document).ready(function () {
    $('.form .close').click(function () {
       $('.modal').css('display', 'none');
    });
});

//not add to cart
$(document).ready(function () {
    $('form.cart button').click(function () {
       event.preventDefault();
       let product_name = document.querySelector('h1.product_title').textContent;
       $('.modal_shop').css('display', 'flex');
       $('#product_name').val(product_name);
    });
});